<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Para obtener el usuario autenticado


class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view(view: 'opinion.index', data: compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $peliculaId = $request->input('pelicula_id');
        $pelicula = Pelicula::findOrFail($peliculaId);

        return view('opinion.create', compact('pelicula'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'calificacion' => 'required|integer|min:1|max:5',
            'comentario' => 'required|string|max:1000',
            'pelicula_id' => 'required|exists:peliculas,id',
        ]);

        Opinion::create([
            'calificacion' => $validatedData['calificacion'],
            'comentario' => $validatedData['comentario'],
            'pelicula_id' => $validatedData['pelicula_id'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('opiniones.index', $validatedData['pelicula_id'])
            ->with('success', 'Tu opinión ha sido registrada con éxito.');
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
