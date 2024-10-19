<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directores=Director::all();
        return view('director.index', compact('directores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('director.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'cantidad_peliculas_dirigidas' => 'required|integer|min:0',
        ]);

        Director::create([
            'nombre' => $request->nombre,
            'nacionalidad' => $request->nacionalidad,
            'cantidad_peliculas_dirigidas' => $request->cantidad_peliculas_dirigidas,
        ]);

        return redirect()->route('directores.index')->with('success', 'Director registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        //
    }
}
