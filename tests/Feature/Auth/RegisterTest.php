<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_register(): void
    {
        $user = User::factory()->make();
        $request = [
            'username' => $user->username,
            'email' => $user->email,
            'password' => 'password',
            'confirmation_password' => 'password',
            'role' => $user->role,
        ];

        $this->postJson(route('register'), $request)
            ->assertCreated()
            ->json();

        $this->assertDatabaseHas('users', $user->toArray());
    }

    public function test_user_register_with_exist_credentials(): void
    {
        $user = User::factory()->create();
        $request = [
            'username' => $user->username,
            'email' => $user->email,
            'password' => 'password',
            'confirmation_password' => 'password',
            'role' => $user->role,
        ];

        $response = $this->postJson(route('register'), $request)
            ->assertUnprocessable()
            ->json();

        $this->assertNotEmpty($response['errors']);
    }

    public function test_user_login_with_uncomplete_field(): void
    {
        $response = $this->postJson(route('register'))
            ->assertUnprocessable()
            ->json();

        $this->assertNotEmpty($response['errors']);
    }
}
