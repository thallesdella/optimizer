<?php

namespace ThallesDella\Optimizer\Providers;

use Illuminate\Support\ServiceProvider;
use ThallesDella\Optimizer\Optimizer;

class OptimizerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Optimizer', function () {
            return new Optimizer();
        });
        
        $this->mergeConfigFrom(
            dirname(__DIR__, 2) . '/config/seo.php', 'seo'
        );
    }
    
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__, 2) . '/config/seo.php' => config_path('seo.php'),
        ]);
    }
}