<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
    
       $this->browse(function (Browser $browser) {
        $browser
            ->loginAs(User::find(3))
            ->visit('/home')
            ->assertUrlIs('http://http://simple-booking-system.test/home');
    });
    }
}
