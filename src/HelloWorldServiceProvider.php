<?php
// src/HelloWorldServiceProvider.php
namespace YourVendor\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register package services
    }

    public function boot()
    {
        // Bootstrap package services
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
