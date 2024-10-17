<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nombre', 'numero_identificador', 'cantidad_butacas', 'cine_id'];

    public function cine()
    {
        return $this->belongsTo(Cine::class);
    }

    public function funcions()
    {
        return $this->hasMany(Funcion::class);
    }
}
