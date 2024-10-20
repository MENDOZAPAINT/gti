<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_distribucion');
            $table->string('titulo_original');
            $table->string('genero');
            $table->string('idioma_original');
            $table->boolean('subtitulos_espanol');
            $table->string('paises_origen');
            $table->year('ano_produccion');
            $table->string('url_sitio_web');
            $table->integer('duracion');
            $table->string('calificacion');
            $table->date('fecha_estreno_santiago');
            $table->text('resumen');
            $table->string('imagen')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
