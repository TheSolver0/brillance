<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Candidat::create([
            'name' => fake()->name(),
            'age' => 23,
            'categorie' => 'miss',
            'code' =>  fake()->text(25),
            'path' => 'assets/img/candidats/CDT8.jpg',
            'votes' => fake()->numberBetween(1,20),
        ]);
    }
}
