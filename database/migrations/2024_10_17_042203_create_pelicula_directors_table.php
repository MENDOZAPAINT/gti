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
        Schema::create('pelicula_directors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id')->constrained(table: 'peliculas')->onDelete('cascade');
            $table->foreignId('director_id')->constrained(table: 'directors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula_directors');
    }
};
