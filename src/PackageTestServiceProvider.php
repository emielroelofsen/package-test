<?php

namespace emielroelofsen\PackageTest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use emielroelofsen\PackageTest\Commands\PackageTestCommand;

class PackageTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_package_test_table')
            ->hasCommand(PackageTestCommand::class);
    }
}
