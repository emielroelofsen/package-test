<?php

namespace emielroelofsen\PackageTest;

use emielroelofsen\PackageTest\Commands\PackageTestCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
