<?php

namespace aijus\Uikit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Uikit.
 *
 * @see \aijus\Uikit\Uikit
 */
class Uikit extends Facade
{
    protected static function getFacadeAccessor()
    {
		return \aijus\Uikit\Uikit::class;
    }
}
