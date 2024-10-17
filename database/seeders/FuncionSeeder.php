<?php

namespace Database\Seeders;

use App\Models\Funcion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcion::create([
            'dia_semana' => 'Lunes',
            'hora_comienzo' => '19:00',
            'sala_id' => 1,
            'pelicula_id' => 1
        ]);
    }
}
