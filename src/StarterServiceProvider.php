<?php

namespace Rorichster\Starter;

use Illuminate\Support\ServiceProvider;

class StarterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Route
        include __DIR__.'/routes.php';

        // Language
        $this->loadTranslationsFrom( __DIR__.'/Lang', 'starter');

        $this->publishes([
            __DIR__.'/Config/starter.php' => config_path('starter.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/starter.php', 'starter');

        // View
        $this->loadViewsFrom(__DIR__.'/Views', 'starter');

        $this->app['starter'] = $this->app->share(function($app) {
            return new Starter;
        });
    }
}
