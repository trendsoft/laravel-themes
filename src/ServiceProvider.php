<?php

namespace LaravelTheme;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Themes\Theme;

class ServiceProvider extends LaravelServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/theme.php' => config_path('theme.php')], 'theme');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Theme::class, function () {
            return new Theme(config('theme'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Theme::class];
    }
}
