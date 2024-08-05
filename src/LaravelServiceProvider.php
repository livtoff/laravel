<?php

namespace Livtoff\Laravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Livtoff\Laravel\Commands\LaravelCommand;

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
