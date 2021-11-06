<?php

namespace Sun\SmsRu;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Sun\SmsRu\Mapper\ArrayObjectMapper;
use Sun\SmsRu\Service\AuthFactory;
use Sun\SmsRu\Service\SmsRuHttpClientService;

class SmsRuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/smsru.php' => config_path('smsru.php')
        ], 'smsru-config');

        $this->app->bind(SmsRuHttpClientService::class, function (Application $app): SmsRuHttpClientService {
            /** @var ArrayObjectMapper $mapper */
            $mapper = $app->get(ArrayObjectMapper::class);
            /** @var SmsRuConfig $config */
            $config = $app->get(SmsRuConfig::class);
            /** @var AuthFactory $authFactory */
            $authFactory = $app->get(AuthFactory::class);
            return new SmsRuHttpClientService($mapper, $config, $authFactory->createAuth());
        });

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\RegisterCallbackCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/smsru.php', 'smsru');

        $this->app->singleton(Facade::FACADE_ACCESSOR, SmsRu::class);
    }
}
