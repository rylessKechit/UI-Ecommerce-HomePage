<?php

namespace Database\Seeders;

use App\Models\sevententh;
use Illuminate\Database\Seeder;

class SevententhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sevententh::factory()->count(5)->create();
    }
}