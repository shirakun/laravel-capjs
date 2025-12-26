<?php

use Illuminate\Support\Facades\Route;
use Shirakun\LaravelCapjs\Tests\Fixtures\Http\Controllers\CapjsController;
use Shirakun\LaravelCapjs\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function setCapjsRoutes(bool $get = false)
{
    if ($get) {
        Route::get('/capjs', [CapjsController::class, 'index']);
    }
}
