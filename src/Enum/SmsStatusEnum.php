<?php

namespace Sun\SmsRu\Enum;

class SmsStatusEnum extends AbstractEnum
{
    public const MESSAGE_NOT_FOUND = -1;
    public const REQUEST_COMPLETED_OR_MESSAGE_IS_IN_OUR_QUEUE = 100;
    public const THE_MESSAGE_IS_SENT_TO_THE_OPERATOR = 101;
    public const MESSAGE_SENT = 102;
    public const MESSAGE_DELIVERED = 103;
    public const CANNOT_BE_DELIVERED_TIME_TO_LIVE_HAS_EXPIRED = 104;
    public const CANNOT_BE_DELIVERED_DELETED_BY_OPERATOR = 105;
    public const UNDELIVERY_FAILURE_IN_THE_PHONE = 106;
    public const UNDELIVERY_UNKNOWN_REASON = 107;
    public const UNDELIVERY_REJECTED = 108;
    public const MESSAGE_READ = 110;
    public const CANNOT_BE_DELIVERED_ROUTE_TO_THE_GIVEN_NUMBER_COULD_NOT_BE_FOUND = 150;
    public const INVALID_API_ID = 200;
    public const THERE_IS_NOT_ENOUGH_FUNDS_ON_THE_PERSONAL_ACCOUNT = 201;
    public const THE_RECIPIENT_PHONE_NUMBER_IS_INCORRECT_OR_THERE_IS_NO_ROUTE_TO_IT = 202;
    public const NO_MESSAGE_TEXT = 203;
    public const SENDER_NAME_IS_NOT_AGREED_WITH_THE_ADMINISTRATION = 204;
    public const THE_MESSAGE_IS_TOO_LONG = 205;
    public const WILL_BE_EXCEEDED_OR_ALREADY_EXCEEDED_THE_DAILY_LIMIT_FOR_SENDING_MESSAGES = 206;
    public const THERE_IS_NO_ROUTE_FOR_MESSAGE_DELIVERY_TO_THIS_NUMBER = 207;
    public const THE_TIME_PARAMETER_WAS_SPECIFIED_INCORRECTLY = 208;
    public const YOU_ADDED_THIS_NUMBER_TO_THE_STOP_LIST = 209;
    public const THIS_NUMBER_IS_IN_THE_SMSRU_STOP_LIST = 215;
    public const GET_IS_USED_WHERE_POST_MUST_BE_USED = 210;
    public const METHOD_NOT_FOUND = 211;
    public const THE_TEXT_OF_THE_MESSAGE_MUST_BE_TRANSMITTED_IN_UTF_8_ENCODING = 212;
    public const MORE_THAN_1000_NUMBERS_ARE_SPECIFIED_IN_THE_RECIPIENT_LIST = 213;
    public const THE_NUMBER_IS_ABROAD = 214;
    public const THE_SERVICE_IS_TEMPORARILY_UNAVAILABLE_PLEASE_TRY_A_LITTLE_LATER = 220;
    public const THE_TOTAL_LIMIT_FOR_THE_NUMBER_OF_MESSAGES_TO_THIS_NUMBER_PER_DAY_HAS_BEEN_EXCEEDED = 230;
    public const THE_LIMIT_OF_IDENTICAL_MESSAGES_FOR_THIS_NUMBER_PER_MINUTE_HAS_BEEN_EXCEEDED = 231;
    public const THE_LIMIT_OF_IDENTICAL_MESSAGES_TO_THIS_NUMBER_PER_DAY_HAS_BEEN_EXCEEDED = 232;
    public const THE_LIMIT_FOR_SENDING_REPEATED_MESSAGES_WITH_A_CODE_TO_THIS_NUMBER_IN_A_SHORT_PERIOD_OF_TIME_HAS_BEEN_EXCEEDED = 233;
    public const INVALID_TOKEN = 300;
    public const INCORRECT_AUTH = 301;
    public const THE_USER_IS_AUTHORIZED_BUT_THE_ACCOUNT_IS_NOT_CONFIRMED = 302;
    public const CONFIRMATION_CODE_IS_INCORRECT = 303;
    public const TOO_MANY_CONFIRMATION_CODES_WERE_SENT_PLEASE_TRY_AGAIN_LATER = 304;
    public const TOO_MANY_WRONG_CODE_ENTRIES_PLEASE_TRY_AGAIN_LATER = 305;
    public const SERVER_ERROR_PLEASE_TRY_AGAIN = 500;
    public const CALLBACK_URL_IS_INVALID = 901;
    public const CALLBACK_HANDLER_NOT_FOUND = 902;

    public static function getValues(): array
    {
        return [
            self::MESSAGE_NOT_FOUND,
            self::REQUEST_COMPLETED_OR_MESSAGE_IS_IN_OUR_QUEUE,
            self::THE_MESSAGE_IS_SENT_TO_THE_OPERATOR,
            self::MESSAGE_SENT,
            self::MESSAGE_DELIVERED,
            self::CANNOT_BE_DELIVERED_TIME_TO_LIVE_HAS_EXPIRED,
            self::CANNOT_BE_DELIVERED_DELETED_BY_OPERATOR,
            self::UNDELIVERY_FAILURE_IN_THE_PHONE,
            self::UNDELIVERY_UNKNOWN_REASON,
            self::UNDELIVERY_REJECTED,
            self::MESSAGE_READ,
            self::CANNOT_BE_DELIVERED_ROUTE_TO_THE_GIVEN_NUMBER_COULD_NOT_BE_FOUND,
            self::INVALID_API_ID,
            self::THERE_IS_NOT_ENOUGH_FUNDS_ON_THE_PERSONAL_ACCOUNT,
            self::THE_RECIPIENT_PHONE_NUMBER_IS_INCORRECT_OR_THERE_IS_NO_ROUTE_TO_IT,
            self::NO_MESSAGE_TEXT,
            self::SENDER_NAME_IS_NOT_AGREED_WITH_THE_ADMINISTRATION,
            self::THE_MESSAGE_IS_TOO_LONG,
            self::WILL_BE_EXCEEDED_OR_ALREADY_EXCEEDED_THE_DAILY_LIMIT_FOR_SENDING_MESSAGES,
            self::THERE_IS_NO_ROUTE_FOR_MESSAGE_DELIVERY_TO_THIS_NUMBER,
            self::THE_TIME_PARAMETER_WAS_SPECIFIED_INCORRECTLY,
            self::YOU_ADDED_THIS_NUMBER_TO_THE_STOP_LIST,
            self::THIS_NUMBER_IS_IN_THE_SMSRU_STOP_LIST,
            self::GET_IS_USED_WHERE_POST_MUST_BE_USED,
            self::METHOD_NOT_FOUND,
            self::THE_TEXT_OF_THE_MESSAGE_MUST_BE_TRANSMITTED_IN_UTF_8_ENCODING,
            self::MORE_THAN_1000_NUMBERS_ARE_SPECIFIED_IN_THE_RECIPIENT_LIST,
            self::THE_NUMBER_IS_ABROAD,
            self::THE_SERVICE_IS_TEMPORARILY_UNAVAILABLE_PLEASE_TRY_A_LITTLE_LATER,
            self::THE_TOTAL_LIMIT_FOR_THE_NUMBER_OF_MESSAGES_TO_THIS_NUMBER_PER_DAY_HAS_BEEN_EXCEEDED,
            self::THE_LIMIT_OF_IDENTICAL_MESSAGES_FOR_THIS_NUMBER_PER_MINUTE_HAS_BEEN_EXCEEDED,
            self::THE_LIMIT_OF_IDENTICAL_MESSAGES_TO_THIS_NUMBER_PER_DAY_HAS_BEEN_EXCEEDED,
            self::THE_LIMIT_FOR_SENDING_REPEATED_MESSAGES_WITH_A_CODE_TO_THIS_NUMBER_IN_A_SHORT_PERIOD_OF_TIME_HAS_BEEN_EXCEEDED,
            self::INVALID_TOKEN,
            self::INCORRECT_AUTH,
            self::THE_USER_IS_AUTHORIZED_BUT_THE_ACCOUNT_IS_NOT_CONFIRMED,
            self::CONFIRMATION_CODE_IS_INCORRECT,
            self::TOO_MANY_CONFIRMATION_CODES_WERE_SENT_PLEASE_TRY_AGAIN_LATER,
            self::TOO_MANY_WRONG_CODE_ENTRIES_PLEASE_TRY_AGAIN_LATER,
            self::SERVER_ERROR_PLEASE_TRY_AGAIN,
            self::CALLBACK_URL_IS_INVALID,
            self::CALLBACK_HANDLER_NOT_FOUND,
        ];
    }
}
