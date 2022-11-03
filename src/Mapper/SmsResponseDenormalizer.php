<?php

namespace Sun\SmsRu\Mapper;

use Sun\SmsRu\Dto\ResponseDto\Data\SmsResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SmsResponseDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $type, string $format = null, array $context = []): array
    {
        return array_map(fn(array $message, string $number): SmsResponse => $this->denormalizer->denormalize(
            array_merge(['number' => $number], $message),
            SmsResponse::class,
            $format,
            $context
        ), $data, array_keys($data));
    }

    public function supportsDenormalization($data, string $type, string $format = null): bool
    {
        return $type === SmsResponse::class . '[]';
    }
}
