<?php

namespace Database\Seeders;

use App\Models\seventh;
use Illuminate\Database\Seeder;

class SeventhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        seventh::factory()->count(5)->create();
    }
}