<?php

namespace ShitwareLtd\LaravelTrongate;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use ShitwareLtd\LaravelTrongate\Http\Middleware\TrongateMiddleware;

class TrongateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/trongate.php', 'trongate');
    }

    public function boot(Kernel $kernel)
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'trongate');
        $this->loadTranslationsFrom(__DIR__.'/lang/', 'trongate');
        $kernel->pushMiddleware(TrongateMiddleware::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/trongate.php' => config_path('trongate.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/lang' => lang_path('vendor/trongate'),
            ], 'lang');
        }
    }
}
