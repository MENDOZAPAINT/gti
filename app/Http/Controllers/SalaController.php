<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view: 'sala.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cines = Cine::all();
        return view('sala.create', compact('cines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'numero_identificador' => 'required|integer|min:1',
            'cantidad_butacas' => 'required|integer|min:1',
            'cine_id' => 'required|exists:cines,id',
        ]);

        Sala::create([
            'nombre' => $request->nombre,
            'numero_identificador' => $request->numero_identificador,
            'cantidad_butacas' => $request->cantidad_butacas,
            'cine_id' => $request->cine_id,
        ]);
        return redirect()->route('salas.index')->with('success', 'Sala registrada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sala $sala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $sala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sala $sala)
    {
        //
    }
}
