<?php

declare(strict_types=1);

namespace Sun\SmsRu\Mapper;

use Sun\SmsRu\Dto\ResponseDto\Data\SmsResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SmsResponseDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): array
    {
        $result = [];
        foreach ($data as $number => $message) {
            $result[] = $this->denormalizer->denormalize(
                array_merge(['number' => $number], $message),
                SmsResponse::class,
                $format,
                $context
            );
        }
        return $result;
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null): bool
    {
        return $type === SmsResponse::class . '[]';
    }
}
