<?php

namespace Laxit\SapBridge;

use Illuminate\Support\ServiceProvider;

class SapBridgeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sap-bridge.php', 'sap-bridge');

        $this->app->singleton('sap-bridge', function ($app) {
            return new SapBridge($app['config']['sap-bridge']);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('sap-bridge.php'),
        ], 'config');
    }
}
