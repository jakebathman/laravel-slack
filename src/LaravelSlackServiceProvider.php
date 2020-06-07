<?php

namespace Tightenco\LaravelSlack;

use Illuminate\Support\ServiceProvider;

class LaravelSlackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-slack.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-slack');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-slack'),
            ], 'views');
            */
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-slack');
    }
}
