<?php

namespace Database\Seeders;

use App\Models\one;
use Illuminate\Database\Seeder;

class OneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        one::factory()->count(5)->create();
    }
}