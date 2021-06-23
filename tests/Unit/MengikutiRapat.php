<?php

namespace Tests\Unit;

use App\Http\Controllers\AutomatedController;
use PHPUnit\Framework\TestCase;

class MengikutiRapat extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testMethod() {
        $your = new AutomatedController();
        $hasil = $your->exampleMethod(4,4);
        $this->assertEquals(8, $hasil);
    }
}
