<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\AutomatedController;

class MelihatAbsensiRapat extends TestCase
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
        $absen = new AutomatedController();
        $hasil = $absen->exampleMethod(4,4);
        $this->assertEquals(8, $hasil);
    }
}
