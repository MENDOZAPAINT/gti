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
        // Obtener los personajes con sus relaciones
        $personajes = Personaje::with('actor', 'pelicula')->get();
    
        // Función para generar gradientes oscuros y vibrantes
        function generateRandomGradient($usedGradients)
        {
            // Definir arrays de colores para cada parte del gradiente
            $fromColors = ['gray-800', 'gray-700', 'blue-800', 'indigo-900', 'purple-900', 'red-800', 'pink-800', 'teal-800'];
            $viaColors = ['purple-900', 'violet-900', 'blue-900', 'rose-900', 'teal-900', 'green-900', 'amber-900', 'fuchsia-900'];
            $toColors = ['violet-800', 'pink-800', 'red-800', 'green-800', 'cyan-800', 'fuchsia-800', 'yellow-800', 'orange-800'];
    
            do {
                // Seleccionar aleatoriamente un color de cada array para crear el gradiente
                $from = $fromColors[array_rand($fromColors)];
                $via = $viaColors[array_rand($viaColors)];
                $to = $toColors[array_rand($toColors)];
    
                // Crear el gradiente
                $gradient = "bg-gradient-to-br from-$from via-$via to-$to";
            } while (in_array($gradient, $usedGradients)); // Verificar si el gradiente ya fue usado
    
            return $gradient;
        }
    
        // Array para almacenar los gradientes ya asignados
        $usedGradients = [];
    
        // Asignar un gradiente único a cada personaje
        foreach ($personajes as $personaje) {
            // Generar un gradiente único y almacenarlo
            $personaje->color = generateRandomGradient($usedGradients);
            $usedGradients[] = $personaje->color; // Guardar el gradiente en el array para evitar repeticiones
        }
    
        // Retornar la vista con los personajes y sus gradientes generados dinámicamente
        return view('personaje.index', compact('personajes'));
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
