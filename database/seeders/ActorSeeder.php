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
        $actores = [
            [
                'nombre' => 'Meryl Streep',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 74,
            ],
            [
                'nombre' => 'Leonardo DiCaprio',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 35,
            ],
            [
                'nombre' => 'Tom Hanks',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 45,
            ],
            [
                'nombre' => 'Cate Blanchett',
                'nacionalidad' => 'Australia',
                'cantidad_peliculas_actuadas' => 60,
            ],
            [
                'nombre' => 'Denzel Washington',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 48,
            ],
            [
                'nombre' => 'Scarlett Johansson',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 50,
            ],
            [
                'nombre' => 'Brad Pitt',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 70,
            ],
            [
                'nombre' => 'Penélope Cruz',
                'nacionalidad' => 'España',
                'cantidad_peliculas_actuadas' => 45,
            ],
            [
                'nombre' => 'Morgan Freeman',
                'nacionalidad' => 'Estados Unidos',
                'cantidad_peliculas_actuadas' => 60,
            ],
            [
                'nombre' => 'Natalie Portman',
                'nacionalidad' => 'Israel',
                'cantidad_peliculas_actuadas' => 40,
            ],
        ];

        foreach ($actores as $actor) {
            Actor::create($actor);
        }
    }
}
