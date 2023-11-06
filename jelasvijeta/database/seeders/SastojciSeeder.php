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
            Sastojci::create([
                'naziv' => $faker->naziv,
                'korisnik_dodao' => $faker->korisnikdodao,
                'vrijeme_dodavanja' => $faker->dateTimeThisMonth,
                'jezik' =>  $faker->jezik,
                
            ]);
        
    }
}
}