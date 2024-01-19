<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    use HasFactory;
    //De uno a muchos
    protected $fillable = ['titulo_cancion', 'genero_cancion', 'duracion', 'artista_id'];

    // Relación muchos a uno con Artista
    public function artista()
    {
        return $this->belongsTo(Artistas::class, 'artista_id');
    }
}
