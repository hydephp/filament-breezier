<?php

namespace HydePHP\FilamentBreezy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HydePHP\FilamentBreezy\FilamentBreezy
 */
class FilamentBreezy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HydePHP\FilamentBreezy\FilamentBreezy::class;
    }
}
