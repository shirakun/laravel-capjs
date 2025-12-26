<?php
namespace Shirakun\LaravelCapjs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shirakun\LaravelCapjs\LaravelCapjs
 */
class LaravelCapjs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shirakun\LaravelCapjs\LaravelCapjs::class;
    }
}
