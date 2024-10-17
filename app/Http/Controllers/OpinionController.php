<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view: 'opinion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas = Pelicula::all();
        return view(view: 'opinion.create', data: compact(var_name: 'peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_persona' => 'required|string|max:100',
            'edad' => 'required|integer|min:0',
            'fecha_registro' => 'required|date',
            'calificacion' => 'required|string|max:1',
            'comentario' => 'required|string|max:1000',
            'numero_identificador' => 'required|integer',
            'pelicula_id' => 'required|exists:peliculas,id',
        ]);

        Opinion::create([
            'nombre_persona' => $request->nombre_persona,
            'edad' => $request->edad,
            'fecha_registro' => $request->fecha_registro,
            'calificacion' => $request->calificacion,
            'comentario' => $request->comentario,
            'numero_identificador' => $request->numero_identificador,
            'pelicula_id' => $request->pelicula_id,
        ]);

        return redirect()->route('opiniones.index')->with('success', 'Opinión registrada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Opinion $opinion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Opinion $opinion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Opinion $opinion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Opinion $opinion)
    {
        //
    }
}
