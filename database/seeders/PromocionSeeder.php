<?php

namespace Database\Seeders;

use App\Models\Promocion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promocion::create([
            'descripcion' => 'Lunes 2x1',
            'descuento' => 50.00,
            'pelicula_id' => 1,
            'funcion_id' => 1
        ]);
    }
}
