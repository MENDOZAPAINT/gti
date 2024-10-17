<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::create([
            'nombre' => 'Sofia Coppola',
            'nacionalidad' => 'Estados Unidos',
            'cantidad_peliculas_dirigidas' => 7
        ]);
    }
}
