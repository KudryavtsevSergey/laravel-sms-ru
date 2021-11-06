<?php

namespace Sun\SmsRu;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Support\Facades\Route;
use Sun\SmsRu\Service\SmsRuApiService;

class SmsRu
{
    public function apiService(): SmsRuApiService
    {
        return app(SmsRuApiService::class);
    }

    public function routes(array $options = []): void
    {
        $defaultOptions = ['prefix' => 'smsru', 'namespace' => '\Sun\SmsRu\Http\Controllers'];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function (Registrar $router): void {
            (new RouteRegistrar($router))->routes();
        });
    }
}
