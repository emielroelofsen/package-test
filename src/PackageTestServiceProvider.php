<?php

namespace emielroelofsen\PackageTest;

use emielroelofsen\PackageTest\Commands\PackageTestCommand;
use emielroelofsen\PackageTest\Listeners\HandleOrderShipped;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
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
            // ->hasViews()
            // ->hasMigration('create_package_test_table')
            ->hasCommand(PackageTestCommand::class);
    }

    public function packageBooted(): void
    {
        $eventClass = '\App\Events\OrderShipped';

        Event::listen($eventClass, HandleOrderShipped::class);

        // $this->app['events']->subscribe(HandleOrderShipped::class);

        //
        //        if (class_exists($eventClass)) {
        //            Event::listen($eventClass, function ($event) {
        //                Log::info('OrderShipped event caught by package-test.', ['order_id' => $event->order->id]);
        //            });
        //        } else {
        //            Log::warning("Event class {$eventClass} does not exist.");
        //        }
    }
}
