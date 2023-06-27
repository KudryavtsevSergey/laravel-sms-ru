<?php

declare(strict_types=1);

namespace Sun\SmsRu;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\SmsRu\Service\SmsRuApiService;

/**
 * @method static SmsRuApiService apiService()
 * @method static void ignoreRoutes()
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'SmsRu';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
