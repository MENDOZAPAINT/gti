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
            'calificacion' => 'Muy Buena',
            'comentario' => 'Una película emocionante con giros inesperados.',
            'pelicula_id' => 1,
            'user_id' => 1

        ]);
    }
}
