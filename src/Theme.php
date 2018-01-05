<?php

namespace LaravelTheme;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Theme extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return \Themes\Theme::class;
    }
}
