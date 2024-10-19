<?php

namespace Database\Seeders;

use App\Models\Personaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personajes = [];

        for ($i = 1; $i <= 20; $i++) {
            $personajes[] = [
                'nombre' => 'Personaje ' . $i,
                'pelicula_id' => rand(1, 10), // Suponiendo que tienes 10 películas
                'actor_id' => rand(1, 10),    // Actor ID entre 1 y 10
            ];
        }

        foreach ($personajes as $personaje) {
            Personaje::create($personaje);
        }
    }
}
