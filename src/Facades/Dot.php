<?php

namespace RonAppleton\LaravelDot\Facade;

use Illuminate\Support\Facades\Facade;
use RonAppleton\Dot\Dot as PhpDot;

class Dot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PhpDot::class;
    }
}
