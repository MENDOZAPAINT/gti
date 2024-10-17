<?php

namespace App\Http\Controllers;

use App\Models\Funcion;
use App\Models\Pelicula;
use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('promocion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas=Pelicula::all();
        $funciones=Funcion::all();
        return view('promocion.create', compact('peliculas','funciones'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:500',
            'descuento' => 'required|decimal:0,2',
            'pelicula_id' => 'required|exists:peliculas,id',
            'funcion_id' => 'required|exists:funcions,id',
        ]);
    
        Promocion::create([
            'descripcion' => $request->descripcion,
            'descuento' => $request->descuento,
            'pelicula_id' => $request->pelicula_id,
            'funcion_id' => $request->funcion_id,
        ]);
    
        return redirect()->route('promociones.index')->with('success', 'Promoción registrada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promocion $promocion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promocion $promocion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promocion $promocion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promocion $promocion)
    {
        //
    }
}
