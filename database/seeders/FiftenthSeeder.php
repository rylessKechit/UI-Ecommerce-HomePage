<?php

namespace Database\Seeders;

use App\Models\fiftenth;
use Illuminate\Database\Seeder;

class FiftenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        fiftenth::factory()->count(5)->create();
    }
}