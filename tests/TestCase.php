<?php
namespace Shirakun\LaravelCapjs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Shirakun\LaravelCapjs\LaravelCapjsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelCapjsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }
}
