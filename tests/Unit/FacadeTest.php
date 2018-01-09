<?php


namespace Tests\Unit;

use LaravelTheme\Theme;
use Tests\TestCase;

class FacadeTest extends TestCase
{
    /**
     * Test Facade
     */
    public function testFacadeIsAvailable()
    {
        $this->assertEquals('default', Theme::getCurrent());
    }
}
