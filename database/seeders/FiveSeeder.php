<?php

namespace Database\Seeders;

use App\Models\five;
use Illuminate\Database\Seeder;

class FiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        five::factory()->count(5)->create();
    }
}