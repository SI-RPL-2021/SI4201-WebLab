<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AnggotaTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group anggota
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Sistem Informasi Web Lab')
                    ->type('email','admin@gmail.com')
                    ->type('password', '12345')
                    ->press('Login')
                    ->assertSee('Selamat Datang, Admin')
                    ->visit('/akunanggota')
                    ->assertSee('Daftar Akun Anggota');
        });
    }
}
