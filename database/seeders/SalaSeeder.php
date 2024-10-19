<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sala::create([
            'nombre' => 'Sala 1',
            'numero_identificador' => 1,
            'cantidad_butacas' => 200,
            'cine_id' => 1 // Cineplex Central
        ]);

        Sala::create([
            'nombre' => 'Sala 2',
            'numero_identificador' => 2,
            'cantidad_butacas' => 180,
            'cine_id' => 1 // Cineplex Central
        ]);

        Sala::create([
            'nombre' => 'Sala 1',
            'numero_identificador' => 1,
            'cantidad_butacas' => 150,
            'cine_id' => 2 // Cinemark Plaza
        ]);

        Sala::create([
            'nombre' => 'Sala 2',
            'numero_identificador' => 2,
            'cantidad_butacas' => 130,
            'cine_id' => 2 // Cinemark Plaza
        ]);

        Sala::create([
            'nombre' => 'Sala IMAX',
            'numero_identificador' => 1,
            'cantidad_butacas' => 300,
            'cine_id' => 3 // Cinepolis Norte
        ]);

        Sala::create([
            'nombre' => 'Sala 3D',
            'numero_identificador' => 2,
            'cantidad_butacas' => 250,
            'cine_id' => 3 // Cinepolis Norte
        ]);

        Sala::create([
            'nombre' => 'Sala 1',
            'numero_identificador' => 1,
            'cantidad_butacas' => 100,
            'cine_id' => 4 // Cine Estrella
        ]);

        Sala::create([
            'nombre' => 'Sala VIP',
            'numero_identificador' => 2,
            'cantidad_butacas' => 50,
            'cine_id' => 5 // Cine Metrocenter
        ]);

        Sala::create([
            'nombre' => 'Sala 1',
            'numero_identificador' => 1,
            'cantidad_butacas' => 120,
            'cine_id' => 6 // Cinemundo La Florida
        ]);

        Sala::create([
            'nombre' => 'Sala 2',
            'numero_identificador' => 2,
            'cantidad_butacas' => 200,
            'cine_id' => 7 // Cine Arte Alameda
        ]);
    }
}
