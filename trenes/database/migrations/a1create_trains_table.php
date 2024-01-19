<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('passengers');
            $table->integer('years'); 
            $table->unsignedBigInteger('train_types_id');
            $table->foreign('train_types_id')->references('id')->on('train_types');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function(Blueprint $table){
            $table->dropColumn('years');
        });
    }

};




