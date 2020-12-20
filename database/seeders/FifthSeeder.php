<?php

namespace Database\Seeders;

use App\Models\fifth;
use Illuminate\Database\Seeder;

class FifthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        fifth::factory()->count(5)->create();
    }
}