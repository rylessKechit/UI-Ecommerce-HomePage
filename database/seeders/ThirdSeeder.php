<?php

namespace Database\Seeders;

use App\Models\third;
use Illuminate\Database\Seeder;

class ThirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        third::factory()->count(5)->create();
    }
}