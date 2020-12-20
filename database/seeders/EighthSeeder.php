<?php

namespace Database\Seeders;

use App\Models\eighth;
use Illuminate\Database\Seeder;

class EighthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        eighth::factory()->count(5)->create();
    }
}