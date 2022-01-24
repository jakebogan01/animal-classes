<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testItShowTheFirstUser()
    {
        $user = User::Factory()->create();
        $response = $this->get('/');
        $response->assertSee($user->name);
    }

    public function testAUserIsLoggedOnlyWhenLoggedIn(){
        $loggedInText = "currently logged in";
        $user = User::Factory()->create();
        $response = $this->get('/');
        $response->assertOk();
        $response->assertDontSee($loggedInText);
    }

    public function testAUserIsLoggedIn(){
        $loggedInText = "currently logged in";
        $user = User::Factory()->create();
        $this->actingAs($user);
        $response = $this->get('/');
        $response->assertOk();
        $response->assertSee($loggedInText);
    }






}
