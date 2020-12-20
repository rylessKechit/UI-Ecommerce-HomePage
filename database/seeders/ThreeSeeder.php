<?php

namespace Database\Seeders;

use App\Models\three;
use Illuminate\Database\Seeder;

class ThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        three::factory()->count(5)->create();
    }
}