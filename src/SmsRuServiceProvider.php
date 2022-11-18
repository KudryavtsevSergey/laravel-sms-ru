<?php

namespace Sun\SmsRu;

use Illuminate\Container\Container;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sun\SmsRu\Mapper\ArrayObjectMapper;
use Sun\SmsRu\Service\AuthFactory;
use Sun\SmsRu\Service\SmsRuHttpClientService;

class SmsRuServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerPublishing();
        $this->registerCommands();
    }

    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/smsru.php' => config_path('smsru.php')
            ], 'smsru-config');
        }
    }

    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\RegisterCallbackCommand::class,
            ]);
        }
    }

    protected function registerRoutes(): void
    {
        if (SmsRu::$registersRoutes) {
            Route::group([
                'prefix' => config('smsru.path', 'smsru'),
                'namespace' => '\Sun\SmsRu\Http\Controllers',
            ], function (): void {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/smsru.php', 'smsru');

        $this->app->singleton(Facade::FACADE_ACCESSOR, SmsRu::class);

        $this->app->singleton(SmsRuHttpClientService::class, static function (
            Container $container
        ): SmsRuHttpClientService {
            /** @var ArrayObjectMapper $mapper */
            $mapper = $container->make(ArrayObjectMapper::class);
            /** @var SmsRuConfig $config */
            $config = $container->make(SmsRuConfig::class);
            /** @var AuthFactory $authFactory */
            $authFactory = $container->make(AuthFactory::class);
            return new SmsRuHttpClientService($mapper, $config, $authFactory->createAuth());
        });
    }
}
