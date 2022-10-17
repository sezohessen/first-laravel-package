<?php

namespace laravel\Larapack;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use laravel\Larapack\Commands\LarapackCommand;

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
