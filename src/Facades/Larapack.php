<?php

namespace laravel\Larapack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \laravel\Larapack\Larapack
 */
class Larapack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \laravel\Larapack\Larapack::class;
    }
}
