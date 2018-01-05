<?php

namespace LaravelTheme;

use Illuminate\Support\Facades\Facade as LaravelFacade;
use Themes\Theme;

class Facade extends LaravelFacade {
    protected static function getFacadeAccessor() {
        return Theme::class;
    }
}
