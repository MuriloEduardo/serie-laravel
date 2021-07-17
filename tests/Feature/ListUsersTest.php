<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users_can_be_listed()
    {
        $user = User::factory()->make();

        $this->actingAs($user);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
