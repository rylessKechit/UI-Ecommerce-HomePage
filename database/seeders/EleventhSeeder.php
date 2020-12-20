<?php

namespace Database\Seeders;

use App\Models\eleventh;
use Illuminate\Database\Seeder;

class EleventhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        eleventh::factory()->count(5)->create();
    }
}