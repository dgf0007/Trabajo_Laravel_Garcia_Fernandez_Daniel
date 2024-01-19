<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        '_token', // Agregar _token al array fillable
    ];
}
