<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelicula::create([
            'titulo_distribucion' => 'El secreto en la montaña',
            'titulo_original' => 'Mountain Mystery',
            'genero' => 'Thriller',
            'idioma_original' => 'Inglés',
            'subtitulos_espanol' => true,
            'paises_origen' => 'Estados Unidos',
            'ano_produccion' => 2023,
            'url_sitio_web' => 'http://mountainmystery.com',
            'duracion' => 120,
            'calificacion' => '+15 años',
            'fecha_estreno_santiago' => '2023-09-15',
            'resumen' => 'Un misterio que se desarrolla en las alturas de una montaña remota.'
        ]);
    }
}
