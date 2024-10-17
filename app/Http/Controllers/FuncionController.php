<?php

namespace App\Http\Controllers;

use App\Models\Funcion;
use App\Models\Pelicula;
use App\Models\Sala;
use Illuminate\Http\Request;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('funcion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salas=Sala::all();
        $peliculas=Pelicula::all();

        return view('funcion.create',compact('salas','peliculas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dia_semana' => 'required|string|max:15',
            'hora_comienzo' => 'required|date_format:H:i',
            'sala_id' => 'required|exists:salas,id',
            'pelicula_id' => 'required|exists:peliculas,id',
        ]);
    
        Funcion::create([
            'dia_semana' => $request->dia_semana,
            'hora_comienzo' => $request->hora_comienzo,
            'sala_id' => $request->sala_id,
            'pelicula_id' => $request->pelicula_id,
        ]);
    
        return redirect()->route('funciones.index')->with('success', 'Función registrada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcion $funcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcion $funcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcion $funcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcion $funcion)
    {
        //
    }
}
