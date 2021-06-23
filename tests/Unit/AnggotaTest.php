<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\AutomatedController;

class AnggotaTest extends TestCase
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

    public function test_Method(){
        $anggota = new AutomatedController();
        $hasil = $anggota->exampleMethod(4,4);
        $this->assertEquals(8, $hasil);
    }
}
