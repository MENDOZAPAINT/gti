<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cine extends Model
{
    protected $fillable = ['nombre', 'direccion', 'telefono'];

    public function salas()
    {
        return $this->hasMany(Sala::class);
    }
}
