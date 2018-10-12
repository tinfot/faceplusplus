<?php

namespace Tinfot\Faceplusplus;

use Illuminate\Support\ServiceProvider;

class FaceplusplusServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/config/faceplusplus.php' => config_path('faceplusplus.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('faceplusplus', function($app) {
            return new Faceplusplus(config('faceplusplus'));
        });

        $this->mergeConfigFrom(__DIR__ . '/config/faceplusplus.php', 'faceplusplus');
    }
}
