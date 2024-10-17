<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::create([
            'nombre' => 'Meryl Streep',
            'nacionalidad' => 'Estados Unidos',
            'cantidad_peliculas_actuadas' => 74
        ]);
    }
}
