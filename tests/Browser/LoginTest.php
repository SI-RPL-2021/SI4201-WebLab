<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group testLogin
     * @return void
     */
    public function testExample()
    // Test ini dilakukan untuk memeriksa apakah login bisa di automatic testing atau tidak
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Sistem Informasi Web Lab')
                    ->type('email','sekretaris2@gmail.com')
                    ->type('password','1234')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
