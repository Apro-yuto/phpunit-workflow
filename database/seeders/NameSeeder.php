<?php

namespace Database\Seeders;

use App\Models\Name;
use Illuminate\Database\Seeder;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Name::factory()
                ->count(15)
                ->create();
    }
}
