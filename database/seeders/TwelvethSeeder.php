<?php

namespace Database\Seeders;

use App\Models\twelveth;
use Illuminate\Database\Seeder;

class TwelvethSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        twelveth::factory()->count(5)->create();
    }
}