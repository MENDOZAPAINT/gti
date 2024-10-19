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
        // Crear 10 funciones
        for ($i = 1; $i <= 10; $i++) {
            Funcion::create([
                'dia_semana' => $this->getRandomDay(),
                'hora_comienzo' => $this->getRandomTime(),
                'sala_id' => $i,        // Suponiendo que hay salas con ID del 1 al 10
                'pelicula_id' => $i,     // Suponiendo que hay películas con ID del 1 al 10
            ]);
        }
    }

    /**
     * Obtener un día de la semana aleatorio.
     */
    private function getRandomDay()
    {
        $days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
        return $days[array_rand($days)];
    }

    /**
     * Obtener una hora aleatoria de comienzo.
     */
    private function getRandomTime()
    {
        $hours = [
            '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'
        ];
        return $hours[array_rand($hours)];
    }
}
