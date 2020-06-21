<?php

namespace ThallesDella\Optimizer\Providers;

use Illuminate\Support\ServiceProvider;
use ThallesDella\Optimizer\Optimizer;

class OptimizerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Optimizer', function () {
            return new Optimizer();
        });
    
        $this->mergeConfigFrom(
            dirname(__DIR__, 2) . '/config/optimizer.php', 'optimizer'
        );
    }
    
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__, 2) . '/config/optimizer.php' => config_path('optimizer.php'),
        ]);
    }
}