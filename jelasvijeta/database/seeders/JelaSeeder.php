<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Jelo;
use Illuminate\Support\Facades\Schema; 


  


class JelaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            jela::create([
            
                'naziv' => $faker->name,
                'jezik' => $faker->languageCode,
                'korisnik_dodao' => $faker->userName,
                'kategorija_id' => $faker->numberBetween(1, 10),
                'tag_id' => $faker->numberBetween(1, 20),
                'sastojci_id' => $faker->numberBetween(1, 30),
                'vrijeme_dodavanja' => $faker->dateTimeThisMonth,

            ]);
        }
    }
}


