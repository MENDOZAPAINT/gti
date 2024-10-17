<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    protected $fillable = ['dia_semana', 'hora_comienzo', 'sala_id', 'pelicula_id'];

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function promocions()
    {
        return $this->hasMany(Promocion::class);
    }
}
