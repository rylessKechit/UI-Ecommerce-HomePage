<?php

namespace Database\Seeders;

use App\Models\two;
use Illuminate\Database\Seeder;

class TwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        two::factory()->count(5)->create();
    }
}