<?php

namespace Database\Seeders;

use App\Models\fourth;
use Illuminate\Database\Seeder;

class FourthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        fourth::factory()->count(5)->create();
    }
}