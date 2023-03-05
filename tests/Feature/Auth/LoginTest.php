<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_login(): void
    {
        $user = User::factory()->create();
        $request = [
            'username' => $user->username,
            'password' => 'password',
        ];

        $response = $this->postJson(route('login'), $request)
            ->assertOk()
            ->json();

        $this->assertEquals($user->username, $response['data']['username']);
        $this->assertEquals($user->email, $response['data']['email']);
        $this->assertEquals($user->role, $response['data']['role']);
        $this->assertNotEmpty($response['token']);
    }

    public function test_user_login_with_wrong_credentials(): void
    {
        $request = [
            'username' => 'wrong username',
            'password' => 'wrong password',
        ];

        $this->postJson(route('login'), $request)
            ->assertUnauthorized()
            ->json();
    }

    public function test_user_login_with_uncomplete_field(): void
    {
        $response = $this->postJson(route('login'))
            ->assertUnprocessable()
            ->json();

        $this->assertNotEmpty($response['errors']);
    }
}