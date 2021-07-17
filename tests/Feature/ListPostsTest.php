<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class ListPostsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_posts_can_be_listed()
    {
        $user = User::factory()->make();

        $this->actingAs($user);

        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
