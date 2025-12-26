<?php
namespace Shirakun\LaravelCapjs;

use Shirakun\LaravelCapjs\Components\CapjsWidget;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCapjsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-capjs')
            ->hasConfigFile()
            ->hasViews('capjs')
            ->hasViewComponent('', CapjsWidget::class);
    }
}
