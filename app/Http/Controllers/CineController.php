<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use Illuminate\Http\Request;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cines = Cine::with('salas')->get(); 
    
        return view('cine.index', compact('cines'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'cine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        Cine::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('cines.index')->with('success', 'Cine registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cine $cine)
    {
        $salas = $cine->salas;
        return view('cine.show', compact('cine', 'salas'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cine $cine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cine $cine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cine $cine)
    {
        //
    }
}
