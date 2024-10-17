<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = ['nombre', 'nacionalidad', 'cantidad_peliculas_dirigidas'];

    public function peliculas()
    {
        return $this->belongsToMany(Pelicula::class);
    }
}
