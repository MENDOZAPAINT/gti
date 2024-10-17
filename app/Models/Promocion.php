<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable = ['descripcion', 'descuento', 'pelicula_id', 'funcion_id'];

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function funcion()
    {
        return $this->belongsTo(Funcion::class);
    }
}
