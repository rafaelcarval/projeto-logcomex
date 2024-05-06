<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Http\Controllers\UserController;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_return_all_users()
    {
        User::factory()->count(3)->create();

        $response = $this->get('/api/data');

        $response->assertStatus(200)
                 ->assertJsonCount(3); // Verifica se retorna o número correto de usuários
    }

    /** @test */
    public function it_can_filter_users_by_char_field()
    {
        $user = User::factory()->create(['char_field' => 'Test']);
        
        $response = $this->get('/api/filter/char/Test');

        $response->assertStatus(200)
                 ->assertJson([$user->toArray()]);
    }

    /** @test */
    public function it_can_filter_users_by_varchar_field()
    {
        $user = User::factory()->create(['varchar_field' => 'Test']);
        
        $response = $this->get('/api/filter/varchar/Test');

        $response->assertStatus(200)
                 ->assertJson([$user->toArray()]);
    }

    /** @test */
    public function it_can_filter_users_by_text_field()
    {
        $user = User::factory()->create(['text_field' => 'Test']);
        
        $response = $this->get('/api/filter/text/Test');

        $response->assertStatus(200)
                 ->assertJson([$user->toArray()]);
    }

    /** @test */
    public function it_can_filter_users_by_integer_field()
    {
        $user = User::factory()->create(['integer_field' => 123]);
        
        $response = $this->get('/api/filter/integer/123');

        $response->assertStatus(200)
                 ->assertJson([$user->toArray()]);
    }
}
