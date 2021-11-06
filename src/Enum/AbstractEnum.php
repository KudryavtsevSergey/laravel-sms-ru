<?php

namespace Sun\SmsRu\Enum;

use Sun\SmsRu\Exceptions\InvalidValueException;

abstract class AbstractEnum
{
    public static function checkAllowedValue($value, bool $isAllowNull = false)
    {
        $isAllow = $isAllowNull && is_null($value);
        if (!$isAllow && !static::isContainValue($value)) {
            throw self::invalidValue($value);
        }
    }

    public static function invalidValue($value): InvalidValueException
    {
        return new InvalidValueException($value, static::getValues());
    }

    public static function isContainValue($value): bool
    {
        return in_array($value, static::getValues());
    }

    abstract public static function getValues(): array;
}
