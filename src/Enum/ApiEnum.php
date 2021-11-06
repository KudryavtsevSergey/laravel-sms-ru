<?php

namespace Sun\SmsRu\Enum;

class ApiEnum extends AbstractEnum
{
    public const SEND = 'sms/send';
    public const STATUS = 'sms/status';
    public const COST = 'sms/cost';
    public const BALANCE = 'my/balance';
    public const LIMIT = 'my/limit';
    public const FREE = 'my/free';
    public const SENDERS = 'my/senders';
    public const CHECK = 'auth/check';
    public const STOP_LIST_ADD = 'stoplist/add';
    public const STOP_LIST_DELETE = 'stoplist/del';
    public const STOP_LIST_GET = 'stoplist/get';
    public const CALLBACK_ADD = 'callback/add';
    public const CALLBACK_DELETE = 'callback/add';
    public const CALLBACK_GET = 'callback/get';
    public const CALL_CHECK_ADD = 'callcheck/add';
    public const CALL_CHECK_STATUS = 'callcheck/status';
    public const AUTH_GET_TOKEN = 'auth/get_token';

    public static function getValues(): array
    {
        return [
            self::SEND,
            self::STATUS,
            self::COST,
            self::BALANCE,
            self::LIMIT,
            self::FREE,
            self::SENDERS,
            self::CHECK,
            self::STOP_LIST_ADD,
            self::STOP_LIST_DELETE,
            self::STOP_LIST_GET,
            self::CALLBACK_ADD,
            self::CALLBACK_DELETE,
            self::CALLBACK_GET,
            self::CALL_CHECK_ADD,
            self::CALL_CHECK_STATUS,
            self::AUTH_GET_TOKEN,
        ];
    }
}
