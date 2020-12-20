<?php

namespace Database\Seeders;

use App\Models\sixtenth;
use Illuminate\Database\Seeder;

class SixtenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sixtenth::factory()->count(5)->create();
    }
}