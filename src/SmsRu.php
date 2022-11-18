<?php

namespace Sun\SmsRu;

use Sun\SmsRu\Service\SmsRuApiService;

class SmsRu
{
    public static bool $registersRoutes = true;

    public static function ignoreRoutes(): void
    {
        static::$registersRoutes = false;
    }

    public function apiService(): SmsRuApiService
    {
        return app(SmsRuApiService::class);
    }
}
