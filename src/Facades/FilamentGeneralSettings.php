<?php

namespace Chareka\FilamentSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chareka\FilamentSettings\FilamentGeneralSettings
 */
class FilamentGeneralSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Chareka\FilamentSettings\FilamentGeneralSettings::class;
    }
}
