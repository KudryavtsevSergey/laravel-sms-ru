<?php

namespace Sun\SmsRu\Mapper;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ArrayNormalizer implements NormalizerInterface
{
    public const FORMAT_KEY = 'array_format';

    public function normalize($object, string $format = null, array $context = [])
    {
        if (is_null($format = $context[self::FORMAT_KEY] ?? null)) {
            return $object;
        }
        return implode($format, $object);
    }

    public function supportsNormalization($data, string $format = null): bool
    {
        return is_array($data);
    }
}
