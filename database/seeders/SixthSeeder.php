<?php

namespace Database\Seeders;

use App\Models\sixth;
use Illuminate\Database\Seeder;

class SixthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sixth::factory()->count(5)->create();
    }
}