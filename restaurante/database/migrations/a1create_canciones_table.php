<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_cancion');
            $table->string('genero_cancion');
            $table->integer('duracion');
            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('canciones');
    }
};
