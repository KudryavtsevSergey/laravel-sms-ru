<?php

declare(strict_types=1);

namespace Sun\SmsRu\Enum;

class AuthTypeEnum extends AbstractEnum
{
    const API_ID = 'api_id';
    const LOGIN_PASSWORD = 'login_password';
    const LOGIN_PASSWORD_SECURE = 'login_password_secure';

    public static function getValues(): array
    {
        return [
            self::API_ID,
            self::LOGIN_PASSWORD,
            self::LOGIN_PASSWORD_SECURE,
        ];
    }
}
