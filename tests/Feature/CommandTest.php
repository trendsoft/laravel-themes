<?php


namespace Tests\Feature;

use LaravelTheme\Theme;
use Tests\TestCase;

class CommandTest extends TestCase
{
    public function testMakeTheme()
    {
        $name = md5(uniqid(microtime(true), true));
        $this->assertEmpty($this->artisan('make:theme', ['slug' => $name]));
        $this->assertTrue(file_exists(config('theme.paths.absolute').'/'.$name));
        $this->assertTrue(file_exists(config('theme.paths.absolute').'/'.$name.'/theme.json'));
    }
}
