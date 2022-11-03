<?php

namespace Sun\SmsRu;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use Sun\SmsRu\Http\Controllers\SmsRuCallbackController;

class RouteRegistrar
{
    public function __construct(
        private Registrar $router,
    ) {
    }

    public function routes(): void
    {
        $this->router->group([], function (Router $router): void {
            $router->get('status', [
                'uses' => 'SmsRuCallbackController@status',
                'as' => SmsRuCallbackController::STATUS_ROUTE_NAME,
            ]);
        });
    }
}
