<?php

namespace Database\Seeders;

use App\Models\thirdtenth;
use Illuminate\Database\Seeder;

class ThirdtenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        thirdtenth::factory()->count(5)->create();
    }
}