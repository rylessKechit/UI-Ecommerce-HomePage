<?php

namespace Database\Seeders;

use App\Models\ninetenth;
use Illuminate\Database\Seeder;

class NinetenthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ninetenth::factory()->count(5)->create();
    }
}