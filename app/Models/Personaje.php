<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    protected $fillable = ['nombre', 'pelicula_id', 'actor_id'];

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
