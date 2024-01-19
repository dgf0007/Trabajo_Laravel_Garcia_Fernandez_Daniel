<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistas extends Model
{
    use HasFactory;
    //De uno a muchos
    protected $fillable = ['nombre_artista', 'genero_artista'];

    // Relación uno a muchos con Cancion
    public function canciones()
    {
        return $this->hasMany(Canciones::class, 'artista_id');
    }
}
