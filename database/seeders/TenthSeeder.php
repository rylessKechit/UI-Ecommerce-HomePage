<?php

namespace Database\Seeders;

use App\Models\tenth;
use Illuminate\Database\Seeder;

class TenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tenth::factory()->count(5)->create();
    }
}