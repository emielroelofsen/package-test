<?php

namespace emielroelofsen\PackageTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \emielroelofsen\PackageTest\PackageTest
 */
class PackageTest extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \emielroelofsen\PackageTest\PackageTest::class;
    }
}
