<?php

namespace Database\Seeders;

use App\Models\Cine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    }
}
