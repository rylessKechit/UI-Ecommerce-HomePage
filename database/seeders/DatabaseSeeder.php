<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProductSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(OneSeeder::class);
        $this->call(TwoSeeder::class);
        $this->call(ThreeSeeder::class);
        $this->call(FourSeeder::class);
        $this->call(FiveSeeder::class);
        $this->call(FirstSeeder::class);
        $this->call(SecondSeeder::class);
        $this->call(ThirdSeeder::class);
        $this->call(FourthSeeder::class);
        $this->call(FifthSeeder::class);
        $this->call(SixthSeeder::class);
        $this->call(SeventhSeeder::class);
        $this->call(EighthSeeder::class);
        $this->call(NinethSeeder::class);
        $this->call(TenthSeeder::class);
        $this->call(EleventhSeeder::class);
        $this->call(TwelvethSeeder::class);
        $this->call(ThirdtenthSeeder::class);
        $this->call(FourtenthSeeder::class);
        $this->call(FiftenthSeeder::class);
        $this->call(SixtenthSeeder::class);
        $this->call(SevententhSeeder::class);
        $this->call(EightenthSeeder::class);
        $this->call(NinetenthSeeder::class);
        $this->call(TwentythSeeder::class);
    }
}