<?php

namespace Sun\SmsRu;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\SmsRu\Service\SmsRuApiService;

/**
 * @method static SmsRuApiService apiService()
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'SmsRu';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
