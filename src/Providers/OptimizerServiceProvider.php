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
    }
    
    public function boot()
    {
        
    }
}