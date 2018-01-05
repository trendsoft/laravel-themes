<?php

namespace LaravelTheme;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Themes\Theme;

class ServiceProvider extends LaravelServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([__DIR__.'/../config/theme.php' => config_path('theme.php')], 'theme');
    }

    public function register()
    {
        $this->app->singleton(Theme::class, function () {
            return new Theme(config('theme'));
        });
    }

    public function provides()
    {
        return [Theme::class];
    }
}
