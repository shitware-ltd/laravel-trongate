<?php

namespace ShitwareLtd\LaravelTrongate;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use ShitwareLtd\LaravelTrongate\Http\Middleware\TrongateMiddleware;

class TrongateServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot(Kernel $kernel)
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'trongate');
        $kernel->pushMiddleware(TrongateMiddleware::class);
    }
}
