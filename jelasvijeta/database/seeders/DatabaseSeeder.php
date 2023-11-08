<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
 
        $this->call(JelaSeeder::class);
        $this->call(KategorijaSeeder::class);
        $this->call(SastojciSeeder::class);
        $this->call(TagSeeder::class);
    }
}
