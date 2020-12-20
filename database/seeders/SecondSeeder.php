<?php

namespace Database\Seeders;

use App\Models\second;
use Illuminate\Database\Seeder;

class SecondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        second::factory()->count(5)->create();
    }
}