<?php


namespace Tests\Unit;

use Tests\TestCase;
use Themes\Theme;

class ServiceProviderTest extends TestCase
{
    /**
     * Test Service Provider
     */
    public function testServiceProviderIsAvailable()
    {
        $this->assertTrue($this->app->bound(Theme::class));
        $this->assertInstanceOf(Theme::class, $this->app->make(Theme::class));
    }
}
