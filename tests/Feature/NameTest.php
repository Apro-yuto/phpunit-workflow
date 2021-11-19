<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Name;
use Tests\TestCase;

class NameTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test index.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/')
                        ->assertStatus(200);
    }
    /**
     * A basic feature test index.
     *
     * @return void
     */
    public function test_postRegister()
    {
        $test = Name::factory()->create();

        $this->assertDatabaseHas('names', [
            'last_name' => $test->last_name,
            'first_name' => $test->firstName,
        ]);
    }
}
