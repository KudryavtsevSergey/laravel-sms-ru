<?php

declare(strict_types=1);

namespace Sun\SmsRu\Mapper;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ArrayNormalizer implements NormalizerInterface
{
    public const FORMAT_KEY = 'array_format';

    public function normalize(mixed $object, string $format = null, array $context = []): mixed
    {
        if (is_null($format = $context[self::FORMAT_KEY] ?? null)) {
            return $object;
        }
        return implode($format, $object);
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return is_array($data);
    }
}
