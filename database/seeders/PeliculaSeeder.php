<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peliculas = [
            [
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
                'resumen' => 'Un misterio que se desarrolla en las alturas de una montaña remota.',
                'imagen' => 'https://cdn.marvel.com/content/1x/005smp_ons_crd_02.jpg',  // Ruta de la imagen
            ],            
            [
                'titulo_distribucion' => 'Amor en tiempos de guerra',
                'titulo_original' => 'Love in War',
                'genero' => 'Drama',
                'idioma_original' => 'Francés',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Francia',
                'ano_produccion' => 2022,
                'url_sitio_web' => 'http://loveinwar.com',
                'duracion' => 135,
                'calificacion' => '+18 años',
                'fecha_estreno_santiago' => '2023-08-01',
                'resumen' => 'Una historia de amor prohibida durante la Segunda Guerra Mundial.',
                'imagen' => 'https://cdn.marvel.com/content/1x/021slq_ons_crd_02.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'El regreso del héroe',
                'titulo_original' => 'The Hero\'s Return',
                'genero' => 'Acción',
                'idioma_original' => 'Español',
                'subtitulos_espanol' => false,
                'paises_origen' => 'México',
                'ano_produccion' => 2021,
                'url_sitio_web' => 'http://herosreturn.com',
                'duracion' => 110,
                'calificacion' => '+12 años',
                'fecha_estreno_santiago' => '2023-06-20',
                'resumen' => 'Un héroe retirado vuelve a la acción para salvar su ciudad.',
                'imagen' => 'https://cdn.marvel.com/content/1x/025drx_ons_crd_02.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'La canción del viento',
                'titulo_original' => 'Song of the Wind',
                'genero' => 'Musical',
                'idioma_original' => 'Inglés',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Reino Unido',
                'ano_produccion' => 2023,
                'url_sitio_web' => 'http://songofthewind.com',
                'duracion' => 100,
                'calificacion' => 'Para todo público',
                'fecha_estreno_santiago' => '2023-07-10',
                'resumen' => 'Una película musical ambientada en una pequeña ciudad costera.',
                'imagen' => 'https://cdn.marvel.com/content/1x/006hbb_ons_crd_03.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'Hacia el infinito',
                'titulo_original' => 'Beyond Infinity',
                'genero' => 'Ciencia Ficción',
                'idioma_original' => 'Alemán',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Alemania',
                'ano_produccion' => 2020,
                'url_sitio_web' => 'http://beyondinfinity.com',
                'duracion' => 145,
                'calificacion' => '+13 años',
                'fecha_estreno_santiago' => '2023-05-15',
                'resumen' => 'Una aventura épica en el espacio profundo.',
                'imagen' => 'https://cdn.marvel.com/content/1x/009drs_ons_crd_02.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'La última carta',
                'titulo_original' => 'The Last Letter',
                'genero' => 'Romance',
                'idioma_original' => 'Italiano',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Italia',
                'ano_produccion' => 2022,
                'url_sitio_web' => 'http://thelastletter.com',
                'duracion' => 125,
                'calificacion' => '+14 años',
                'fecha_estreno_santiago' => '2023-10-01',
                'resumen' => 'Un amor que trasciende el tiempo y las distancias.',
                'imagen' => 'https://cdn.marvel.com/content/1x/017thor_ons_crd_03.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'La sombra del pasado',
                'titulo_original' => 'Shadow of the Past',
                'genero' => 'Suspenso',
                'idioma_original' => 'Portugués',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Brasil',
                'ano_produccion' => 2021,
                'url_sitio_web' => 'http://shadowofthepast.com',
                'duracion' => 105,
                'calificacion' => '+16 años',
                'fecha_estreno_santiago' => '2023-09-25',
                'resumen' => 'Un detective enfrenta los fantasmas de su pasado mientras resuelve un crimen.',
                'imagen' => 'https://cdn.marvel.com/content/1x/011blw_ons_crd_04.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'El viaje interminable',
                'titulo_original' => 'The Endless Journey',
                'genero' => 'Aventura',
                'idioma_original' => 'Inglés',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Australia',
                'ano_produccion' => 2023,
                'url_sitio_web' => 'http://endlessjourney.com',
                'duracion' => 140,
                'calificacion' => '+12 años',
                'fecha_estreno_santiago' => '2023-11-15',
                'resumen' => 'Un grupo de amigos se embarca en una aventura para descubrir tierras inexploradas.',
                'imagen' => 'https://cdn.marvel.com/content/1x/003cap_ons_crd_03.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'Caminos cruzados',
                'titulo_original' => 'Crossed Paths',
                'genero' => 'Drama',
                'idioma_original' => 'Español',
                'subtitulos_espanol' => false,
                'paises_origen' => 'España',
                'ano_produccion' => 2022,
                'url_sitio_web' => 'http://crossedpaths.com',
                'duracion' => 130,
                'calificacion' => '+16 años',
                'fecha_estreno_santiago' => '2023-12-01',
                'resumen' => 'Historias entrelazadas de personas cuyas vidas cambian tras un accidente.',
                'imagen' => 'https://cdn.marvel.com/content/1x/012scw_ons_crd_02.jpg',  // Ruta de la imagen

            ],
            [
                'titulo_distribucion' => 'Bajo las estrellas',
                'titulo_original' => 'Under the Stars',
                'genero' => 'Fantasía',
                'idioma_original' => 'Coreano',
                'subtitulos_espanol' => true,
                'paises_origen' => 'Corea del Sur',
                'ano_produccion' => 2023,
                'url_sitio_web' => 'http://underthestars.com',
                'duracion' => 115,
                'calificacion' => 'Para todo público',
                'fecha_estreno_santiago' => '2023-08-20',
                'resumen' => 'Un cuento mágico sobre un niño que descubre un mundo secreto bajo las estrellas.',
                'imagen' => 'https://cdn.marvel.com/content/1x/002irm_ons_crd_03.jpg',  // Ruta de la imagen

            ],
        ];

        // Insertar las películas en la base de datos
        foreach ($peliculas as $pelicula) {
            Pelicula::create($pelicula);
        }
    }
}
