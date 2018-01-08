<?php


namespace Tests\Feature;

use LaravelTheme\Theme;
use Tests\TestCase;

class CommandTest extends TestCase
{
    public function testMakeTheme()
    {
        $this->assertEmpty($this->artisan('make:theme', ['name' => 'default']));
    }
}
