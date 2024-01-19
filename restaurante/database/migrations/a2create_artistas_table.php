<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_artista');
            $table->string('genero_artista');
            //Para hacer un campo único $table->string('nombre_artista')->unique();
            //Para hacer un campo opcional $table->string('genero_artista')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artistas');
    }
};
