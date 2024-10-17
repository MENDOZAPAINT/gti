<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Pelicula;
use App\Models\PeliculaActor;
use App\Models\PeliculaDirector;
use Illuminate\Http\Request;

class PeliculaActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view: 'pelicula_actor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas = Pelicula::all();
        $actores = Actor::all();
        return view('pelicula_actor.create', compact('peliculas', 'actores'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelicula_id' => 'required|exists:peliculas,id',
            'actor_id' => 'required|exists:actors,id',
        ]);
    
        PeliculaActor::create([
            'pelicula_id' => $request->pelicula_id,
            'actor_id' => $request->actor_id,
        ]);
    
        return redirect()->route('pelicula_actores.index')->with('success', 'Actor asignado a película con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PeliculaActor $peliculaActor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeliculaActor $peliculaActor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeliculaActor $peliculaActor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeliculaActor $peliculaActor)
    {
        //
    }
}
