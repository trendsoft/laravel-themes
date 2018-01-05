<?php


namespace Tests\Unit;

use Tests\TestCase;
use Themes\Theme;

class ServiceProviderTest extends TestCase {

    public function testServiceProviderIsAvailable() {
        $this->assertTrue($this->app->bound(Theme::class));
        $this->assertTrue($this->app->make(Theme::class));
    }
}
