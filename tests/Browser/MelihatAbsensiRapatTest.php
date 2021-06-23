<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MelihatAbsensiRapatTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group absenrapat
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Sistem Informasi Web Lab')
                    ->type('email','tasyanozuka@gmail.com')
                    ->type('password', '12345')
                    ->press('Login')
                    ->assertSee('Selamat Datang, Tasya Nozuka Hasprasi')
                    ->visit('/absenrapat')
                    ->assertSee('Absensi Rapat');
        });
    }
}
