<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;


class AuthUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_that_a_authenticated_user_can_be_retrieved()
    {
        $user = factory(User::class)->create();
        Sanctum::actingAs(
            $user,
            ['*']
        );
        $response = $this->get('/api/auth-user');

        $response
            ->assertStatus(200)
            ->assertJson([
            "id"=>$user->id,
            "name"=>$user->name,
            "email"=>$user->email,
        ]);
    }
}
