<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema; 

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Kategorija::create([
                'naziv' => $faker->naziv,
                'korisnik_dodao' => $faker->korisnikdodao,
                'vrijeme_dodavanja' => $faker-> dateTimeThisMonth,
                
            ]);
        }
    
    }
}
