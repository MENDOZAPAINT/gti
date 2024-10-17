<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = [
        'titulo_distribucion',
        'titulo_original',
        'genero',
        'idioma_original',
        'subtitulos_espanol',
        'paises_origen',
        'ano_produccion',
        'url_sitio_web',
        'duracion',
        'calificacion',
        'fecha_estreno_santiago',
        'resumen'
    ];
    public function directors()
    {
        return $this->belongsToMany(Director::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function personajes()
    {
        return $this->hasMany(Personaje::class);
    }

    public function funcions()
    {
        return $this->hasMany(Funcion::class);
    }

    public function promocions()
    {
        return $this->hasMany(Promocion::class);
    }

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    public function averageRating()
    {
        // Asegúrate de que las calificaciones sean números, usa 'cast' si es necesario
        return $this->opinions()->count() > 0 ? $this->opinions()->avg('calificacion') : 0;
    }
}
