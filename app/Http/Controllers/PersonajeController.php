<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Pelicula;
use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('personaje.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $peliculas=Pelicula::all();
        $actores=Actor::all();
        return view('personaje.create', compact('peliculas','actores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'pelicula_id' => 'required|exists:peliculas,id',
            'actor_id' => 'required|exists:actors,id',
        ]);

        Personaje::create([
            'nombre' => $request->nombre,
            'pelicula_id' => $request->pelicula_id,
            'actor_id' => $request->actor_id,
        ]);

        return redirect()->route('personajes.index')->with('success', 'Personaje registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        //
    }
}
