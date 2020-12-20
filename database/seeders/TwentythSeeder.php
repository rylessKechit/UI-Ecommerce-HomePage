<?php

namespace Database\Seeders;

use App\Models\twentyth;
use Illuminate\Database\Seeder;

class TwentythSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        twentyth::factory()->count(5)->create();
    }
}