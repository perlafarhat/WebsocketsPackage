<?php

namespace Farhat\Websocket\Providers;

use Illuminate\Support\ServiceProvider;

class PusherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../views', 'websocket');
    }

  
}
