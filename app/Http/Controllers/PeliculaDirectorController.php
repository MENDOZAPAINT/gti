<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Pelicula;
use App\Models\PeliculaDirector;
use Illuminate\Http\Request;

class PeliculaDirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelicula_director.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas = Pelicula::all();
        $directores = Director::all();
        return view('pelicula_director.create', compact('peliculas', 'directores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelicula_id' => 'required|exists:peliculas,id',
            'director_id' => 'required|exists:directors,id',
        ]);

        PeliculaDirector::create([
            'pelicula_id' => $request->pelicula_id,
            'director_id' => $request->director_id,
        ]);

        return redirect()->route('pelicula_directores.index')->with('success', 'Director asignado a película con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PeliculaDirector $peliculaDirector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeliculaDirector $peliculaDirector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeliculaDirector $peliculaDirector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeliculaDirector $peliculaDirector)
    {
        //
    }
}
