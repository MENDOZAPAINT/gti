<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $fillable = [
        'nombre_persona',
        'edad',
        'fecha_registro',
        'calificacion',
        'comentario',
        'numero_identificador',
        'pelicula_id',
        'user_id'

    ];

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }
}
