<?php

namespace Sun\SmsRu\Mapper;

use Doctrine\Common\Annotations\AnnotationReader;
use Sun\SmsRu\Dto\RequestDto\RequestDtoInterface;
use Sun\SmsRu\Dto\ResponseDto\ResponseDtoInterface;
use Sun\SmsRu\Exceptions\InternalError;
use Symfony\Component\PropertyInfo\Extractor\ConstructorExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ArrayObjectMapper
{
    private Serializer $serializer;

    public function __construct()
    {
        $phpDocExtractor = new PhpDocExtractor();
        $extractor = new PropertyInfoExtractor(
            typeExtractors: [new ConstructorExtractor([$phpDocExtractor]), $phpDocExtractor]
        );
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $normalizers = [
            new PhoneMessageNormalizer(),
            new SmsResponseDenormalizer(),
            new ArrayNormalizer(),
            new ObjectNormalizer(
                $classMetadataFactory,
                new CamelCaseToSnakeCaseNameConverter(),
                propertyTypeExtractor: $extractor
            ),
            new ArrayDenormalizer(),
        ];
        $this->serializer = new Serializer($normalizers);
    }

    public function serialize(RequestDtoInterface $model): array
    {
        try {
            return $this->serializer->normalize($model);
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error normalize model to array', $e);
        }
    }

    /**
     * @param array $data
     * @param string $type
     * @return ResponseDtoInterface|ResponseDtoInterface[]
     */
    public function deserialize(array $data, string $type)
    {
        try {
            return $this->serializer->denormalize($data, $type, null, [
                AbstractNormalizer::ALLOW_EXTRA_ATTRIBUTES => true,
                AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
            ]);
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error denormalize array to model', $e);
        }
    }
}
