<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['nombre', 'nacionalidad', 'cantidad_peliculas_actuadas'];

    public function peliculas()
    {
        return $this->belongsToMany(Pelicula::class);
    }

    public function personajes()
    {
        return $this->hasMany(Personaje::class);
    }
}
