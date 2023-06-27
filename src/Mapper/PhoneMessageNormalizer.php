<?php

declare(strict_types=1);

namespace Sun\SmsRu\Mapper;

use Sun\SmsRu\Dto\RequestDto\Data\PhoneMessage;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PhoneMessageNormalizer implements NormalizerInterface
{
    public const IS_PHONE_MESSAGE_KEY = 'is_phone_message';

    public function normalize(mixed $object, string $format = null, array $context = []): array
    {
        $isPhoneMessage = $context[self::IS_PHONE_MESSAGE_KEY] ?? false;

        if (!$isPhoneMessage) {
            return $object;
        }

        $result = [];
        /** @var PhoneMessage $phoneMessage */
        foreach ($object as $phoneMessage) {
            $result[$phoneMessage->getPhone()] = $phoneMessage->getMessage();
        }
        return $result;
    }

    public function supportsNormalization($data, string $format = null): bool
    {
        return is_array($data);
    }
}
