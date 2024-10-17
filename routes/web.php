<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CineController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\PeliculaActorController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\PeliculaDirectorController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\SalaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');





    Route::resource('peliculas', PeliculaController::class)->names([
        'index' => 'peliculas.index',
        'create' => 'peliculas.create',
        'store' => 'peliculas.store',
        'show' => 'peliculas.show',
        'edit' => 'peliculas.edit',
        'update' => 'peliculas.update',
        'destroy' => 'peliculas.destroy',
    ]);

    Route::resource('directores', DirectorController::class)->names([
        'index' => 'directores.index',
        'create' => 'directores.create',
        'store' => 'directores.store',
        'show' => 'directores.show',
        'edit' => 'directores.edit',
        'update' => 'directores.update',
        'destroy' => 'directores.destroy',
    ]);

    Route::resource('actores', ActorController::class)->names([
        'index' => 'actores.index',
        'create' => 'actores.create',
        'store' => 'actores.store',
        'show' => 'actores.show',
        'edit' => 'actores.edit',
        'update' => 'actores.update',
        'destroy' => 'actores.destroy',
    ]);


    Route::resource('personajes', PersonajeController::class)->names([
        'index' => 'personajes.index',
        'create' => 'personajes.create',
        'store' => 'personajes.store',
        'show' => 'personajes.show',
        'edit' => 'personajes.edit',
        'update' => 'personajes.update',
        'destroy' => 'personajes.destroy',
    ]);

    Route::resource('cines', CineController::class)->names([
        'index' => 'cines.index',
        'create' => 'cines.create',
        'store' => 'cines.store',
        'show' => 'cines.show',
        'edit' => 'cines.edit',
        'update' => 'cines.update',
        'destroy' => 'cines.destroy',
    ]);

    Route::resource('salas', SalaController::class)->names([
        'index' => 'salas.index',
        'create' => 'salas.create',
        'store' => 'salas.store',
        'show' => 'salas.show',
        'edit' => 'salas.edit',
        'update' => 'salas.update',
        'destroy' => 'salas.destroy',
    ]);

    Route::resource('funciones', FuncionController::class)->names([
        'index' => 'funciones.index',
        'create' => 'funciones.create',
        'store' => 'funciones.store',
        'show' => 'funciones.show',
        'edit' => 'funciones.edit',
        'update' => 'funciones.update',
        'destroy' => 'funciones.destroy',
    ]);

    Route::resource('promociones', PromocionController::class)->names([
        'index' => 'promociones.index',
        'create' => 'promociones.create',
        'store' => 'promociones.store',
        'show' => 'promociones.show',
        'edit' => 'promociones.edit',
        'update' => 'promociones.update',
        'destroy' => 'promociones.destroy',
    ]);

    Route::resource('opiniones', OpinionController::class)->names([
        'index' => 'opiniones.index',
        'create' => 'opiniones.create',
        'store' => 'opiniones.store',
        'show' => 'opiniones.show',
        'edit' => 'opiniones.edit',
        'update' => 'opiniones.update',
        'destroy' => 'opiniones.destroy',
    ]);

    Route::resource('pelicula_directores', PeliculaDirectorController::class)->names([
        'index' => 'pelicula_directores.index',
        'create' => 'pelicula_directores.create',
        'store' => 'pelicula_directores.store',
        'show' => 'pelicula_directores.show',
        'edit' => 'pelicula_directores.edit',
        'update' => 'pelicula_directores.update',
        'destroy' => 'pelicula_directores.destroy',
    ]);

    Route::resource('pelicula_actores', PeliculaActorController::class)->names([
        'index' => 'pelicula_actores.index',
        'create' => 'pelicula_actores.create',
        'store' => 'pelicula_actores.store',
        'show' => 'pelicula_actores.show',
        'edit' => 'pelicula_actores.edit',
        'update' => 'pelicula_actores.update',
        'destroy' => 'pelicula_actores.destroy',
    ]);
});



require __DIR__ . '/auth.php';
