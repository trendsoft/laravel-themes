<?php


namespace Tests\Unit;

use Tests\TestCase;

class FacadeTest extends TestCase {
    public function testFacadeIsAvailable() {
        $this->assertTrue($this->app->isAlias('Theme'));
    }
}
