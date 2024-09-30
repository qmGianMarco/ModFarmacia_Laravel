<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'principio_activo',
        'forma_farmaceutica',
        'concentracion',
        'precio_unitario',
        'stock_min',
        'canidad'

    ];
}
