<?php

namespace laravel\Larapack;

use laravel\Larapack\Commands\LarapackCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LarapackServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larapack')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larapack_table')
            ->hasCommand(LarapackCommand::class);
    }
}
