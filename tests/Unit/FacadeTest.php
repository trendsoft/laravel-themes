<?php


namespace Tests\Unit;

use LaravelTheme\Theme;
use Tests\TestCase;

class FacadeTest extends TestCase
{
    public function testFacadeIsAvailable()
    {
        $this->assertCount(0, Theme::all());
    }
}
