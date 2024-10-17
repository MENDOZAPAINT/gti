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
        Personaje::create([
            'nombre' => 'Detective Sarah Connor',
            'pelicula_id' => 1,
            'actor_id' => 1
        ]);
    }
}
