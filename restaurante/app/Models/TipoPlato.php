<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlato extends Model
{
    use HasFactory;

    //Indicar que tipoPlato tiene muchos platos
    public function platos(){
        return $this->hasMany(Plato::class);
    }
}
