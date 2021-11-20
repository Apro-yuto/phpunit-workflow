<?php

namespace Tests\Feature;

use App\Models\Name;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NameTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test index.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/')
                        ->assertStatus(200);
    }

    /**
     * A basic feature test index.
     *
     * @return void
     */
    public function testPostRegister()
    {
        $test = Name::factory()->create();

        $this->assertDatabaseHas('names', [
            'last_name'  => $test->last_name,
            'first_name' => $test->first_name,
        ]);
    }
}
