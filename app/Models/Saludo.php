<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saludo extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nombre',
        'mascota',
        'relacion',
        'saludo'
    ];
}
