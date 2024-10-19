<?php

namespace Database\Seeders;

use App\Models\Cine;
use Illuminate\Database\Seeder;

class CineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cine::create([
            'nombre' => 'Cineplex Central',
            'direccion' => 'Av. Principal 123, Santiago',
            'telefono' => '+56 2 2345 6789'
        ]);

        Cine::create([
            'nombre' => 'Cinemark Plaza',
            'direccion' => 'Plaza de Armas 456, Santiago',
            'telefono' => '+56 2 9876 5432'
        ]);

        Cine::create([
            'nombre' => 'Cinepolis Norte',
            'direccion' => 'Av. Independencia 789, Santiago',
            'telefono' => '+56 2 2341 5678'
        ]);

        Cine::create([
            'nombre' => 'Cine Estrella',
            'direccion' => 'Calle Estrella 12, Valparaíso',
            'telefono' => '+56 2 2234 5678'
        ]);

        Cine::create([
            'nombre' => 'Cine Metrocenter',
            'direccion' => 'Paseo Ahumada 221, Santiago',
            'telefono' => '+56 2 2654 9876'
        ]);

        Cine::create([
            'nombre' => 'Cinemundo La Florida',
            'direccion' => 'Av. La Florida 1023, Santiago',
            'telefono' => '+56 2 2712 3456'
        ]);

        Cine::create([
            'nombre' => 'Cine Arte Alameda',
            'direccion' => 'Av. Alameda 2000, Santiago',
            'telefono' => '+56 2 2512 3456'
        ]);

        Cine::create([
            'nombre' => 'Cine Planet Costanera',
            'direccion' => 'Costanera Center, Santiago',
            'telefono' => '+56 2 2789 6543'
        ]);

        Cine::create([
            'nombre' => 'Cine Hoyts Parque Arauco',
            'direccion' => 'Av. Kennedy 8000, Santiago',
            'telefono' => '+56 2 2987 6543'
        ]);

        Cine::create([
            'nombre' => 'Cine Gran Rancagua',
            'direccion' => 'Calle Libertad 334, Rancagua',
            'telefono' => '+56 2 2921 8765'
        ]);
    }
}
