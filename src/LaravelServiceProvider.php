<?php

namespace Livtoff\Laravel;

use Livtoff\Laravel\Commands\LaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_table')
            ->hasCommand(LaravelCommand::class);
    }
}
