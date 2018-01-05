<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array|string
     */
    protected function getPackageProviders($app)
    {
        return [
            'LaravelTheme\ServiceProvider'
        ];
    }

    /**
     * Get package aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Theme' => 'LaravelTheme\Theme'
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('theme', []);
    }
}
