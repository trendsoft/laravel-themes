<?php

namespace LaravelTheme;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Themes\Theme;

class ServiceProvider extends LaravelServiceProvider {
    protected $defer = true;

    public function boot() {
    }

    public function register() {
        $this->app->singleton(Theme::class, function () {
            return new Theme();
        });
    }

    public function provides() {
        return [Theme::class];
    }
}
