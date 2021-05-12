<?php

namespace BiilaGo\LaravelApiWrapper;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\ServiceProvider;

class LaravelApiWrapperServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/biila_go_api.php', 'biila_go_api');

        $this->publishes([
            __DIR__ . '/../config/biila_go_api.php' => $this->app->configPath('biila_go_api.php'),
        ]);

        $this->app->bind(BiilaGoApiHttp::class, function () {
            $config = $this->app['config']['biila_go_api'];

            return new BiilaGoApiHttp(
                $config['api_token'], 
                $config['identity'], 
                $config['domain'], 
                new Factory
            );
        });

        $this->app->bind(
            BiilaGoApi::class, 
            fn (Application $app) => new BiilaGoApi($app->make(BiilaGoApiHttp::class))
        );
    }
}