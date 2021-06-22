<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    // Test ini dilakukan untuk memeriksa apakah register bisa di automatic testing atau tidak
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Registrasi')
                    ->type('nama','Faizal Hudya Rizfianto')
                    ->type('nim','1202184289')
                    ->select('kelas','SI-42-01')
                    ->select('divisi','Trainer')
                    ->select('study_group','Data Engineer')
                    ->type('email','trainer3@gmail.com')
                    ->type('password','1234')
                    ->type('password_confirmation','1234')
                    ->press('Daftar')
                    ->assertPathIs('/login');
        });
    }
}
