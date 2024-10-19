<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cargar las películas con sus opiniones, personajes, funciones, salas y cines
        $peliculas = Pelicula::with([
            'opinions',
            'personajes.actor',
            'funcions.sala.cine' // Cargamos las salas y los cines asociados
        ])->get();

        return view('pelicula.index', compact('peliculas'));
    }
    public function cinesDisponibles($id)
    {
        $pelicula = Pelicula::with(['funcions.sala.cine'])->findOrFail($id);
        return view('pelicula.cine', compact('pelicula'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo_distribucion' => 'required|string|max:255',
            'titulo_original' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'idioma_original' => 'required|string|max:255',
            'subtitulos_espanol' => 'required|boolean',
            'paises_origen' => 'required|string|max:255',
            'ano_produccion' => 'required|integer|digits:4|between:1900,' . date('Y'),
            'url_sitio_web' => 'required|url|max:255',
            'duracion' => 'required|integer|min:1',
            'calificacion' => 'required|string|max:50',
            'fecha_estreno_santiago' => 'required|date',
            'resumen' => 'required|string',
        ]);

        Pelicula::create([
            'titulo_distribucion' => $request->titulo_distribucion,
            'titulo_original' => $request->titulo_original,
            'genero' => $request->genero,
            'idioma_original' => $request->idioma_original,
            'subtitulos_espanol' => $request->subtitulos_espanol,
            'paises_origen' => $request->paises_origen,
            'ano_produccion' => $request->ano_produccion,
            'url_sitio_web' => $request->url_sitio_web,
            'duracion' => $request->duracion,
            'calificacion' => $request->calificacion,
            'fecha_estreno_santiago' => $request->fecha_estreno_santiago,
            'resumen' => $request->resumen,
        ]);

        return redirect()->route('peliculas.index')->with('success', 'Película registrada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
