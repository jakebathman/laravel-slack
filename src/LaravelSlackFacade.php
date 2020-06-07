<?php

namespace Tightenco\LaravelSlack;

use Illuminate\Support\Facades\Facade;

class LaravelSlackFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-slack';
    }
}
