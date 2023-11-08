<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema; 

class SastojciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            sastojci::create([
                
                'naziv' => $faker->name,
                'korisnik_dodao' => $faker->userName,
                'vrijeme_dodavanja' => $faker->dateTimeThisMonth
                
            ]);
        
    }
}
}
