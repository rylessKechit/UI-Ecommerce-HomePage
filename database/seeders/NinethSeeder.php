<?php

namespace Database\Seeders;

use App\Models\nineth;
use Illuminate\Database\Seeder;

class NinethSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nineth::factory()->count(5)->create();
    }
}