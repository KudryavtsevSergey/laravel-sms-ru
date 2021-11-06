<?php

namespace Sun\SmsRu;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use Sun\SmsRu\Http\Controllers\SmsRuCallbackController;

class RouteRegistrar
{
    protected Registrar $router;

    public function __construct(Registrar $router)
    {
        $this->router = $router;
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
