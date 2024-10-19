<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las películas
        $peliculas = Pelicula::with([
            'opinions',
            'personajes.actor',
            'funcions.sala.cine'
        ])->get();

        // Obtener las 6 películas más recientes
        $recientes = Pelicula::with([
            'opinions',
            'personajes.actor',
            'funcions.sala.cine'
        ])
            ->latest() // Ordenar por fecha de creación en orden descendente
            ->take(6) // Limitar a las 6 películas más recientes
            ->get();

        return view('welcome', compact('peliculas', 'recientes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
