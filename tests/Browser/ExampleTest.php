<?php

namespace Tests\Browser;

use App\User;
use function PHPSTORM_META\type;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testhomepage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
/* Test User Login*/
    public function testLogin()
    {

        $newuser = factory(User::class)->create([
            'email'=>'deeno@gmail.com',
        ]);

        $this->browse(function (Browser $browser)  use ($newuser){

            $browser->visit('/login')
                    ->type('email',$newuser->email)
                    ->type('password','remo@366')
                    ->press('Login')
                    ->assertPathIs('/home');

        });

    }


}
