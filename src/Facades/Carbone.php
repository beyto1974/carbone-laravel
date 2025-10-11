<?php

namespace Beyto\CarboneLaravel\Facades;

use Carboneio\SDK\Carbone as CarboneSDK;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Beyto\CarboneLaravel\CarboneLaravel
 */
class Carbone extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CarboneSDK::class;
    }
}
