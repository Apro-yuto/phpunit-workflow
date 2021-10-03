<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Name;
use Tests\TestCase;

class NameTest extends TestCase
{
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
        $test = Name::factory()->make();

        $response = $this->post('/', [
            'lastName' => $test->last_name,
            'firstName' => $test->first_name
        ]);
        $response->assertRedirect('/');
    }
}
