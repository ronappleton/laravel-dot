<?php

namespace RonAppleton\LaravelDot;

use RonAppleton\LaravelDot\Facade\Dot;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Dot::class, static function() {
            return new Dot;
        });
    }
}
