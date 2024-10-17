<?php

namespace Database\Seeders;

use App\Models\Opinion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpinionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Opinion::create([
            'nombre_persona' => 'Juan Pérez',
            'edad' => 30,
            'fecha_registro' => '2023-09-16',
            'calificacion' => 'Muy Buena',
            'comentario' => 'Una película emocionante con giros inesperados.',
            'numero_identificador' => 1,
            'pelicula_id' => 1
        ]);
    }
}
