<?php

namespace Database\Seeders;

use App\Models\first;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        first::factory()->count(5)->create();
    }
}