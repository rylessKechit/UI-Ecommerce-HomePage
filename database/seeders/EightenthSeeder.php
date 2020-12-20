<?php

namespace Database\Seeders;

use App\Models\eightenth;
use Illuminate\Database\Seeder;

class EightenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        eightenth::factory()->count(5)->create();
    }
}