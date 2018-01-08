<?php

namespace LaravelTheme;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Theme extends LaravelFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Themes\Theme::class;
    }
}
