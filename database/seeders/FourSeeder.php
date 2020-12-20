<?php

namespace Database\Seeders;

use App\Models\four;
use Illuminate\Database\Seeder;

class FourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        four::factory()->count(5)->create();
    }
}