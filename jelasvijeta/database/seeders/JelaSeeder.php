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
            Jelo::create([
                'naziv' => $faker->naziv,
                'jezik' => $faker->jezik,
                'korisnik_dodao' => $faker->korisnikdodao,
                'kategorija_id' => $faker->karegodijaId,
                'tag_id' => $faker->tagId,
                'sastojci_id' => $faker->sastojciId,
                'vrijeme_dodavanja' => $faker->dateTimeThisMonth,
            ]);
        }
    }
}


