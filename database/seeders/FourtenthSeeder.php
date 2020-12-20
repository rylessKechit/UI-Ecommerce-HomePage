<?php

namespace Database\Seeders;

use App\Models\fourtenth;
use Illuminate\Database\Seeder;

class FourtenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        fourtenth::factory()->count(5)->create();
    }
}