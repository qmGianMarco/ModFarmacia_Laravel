<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    public $table = 'medicamento';

    protected $fillable = [
        'id',
        'nombre',
        'principio_activo',
        'forma_farmaceutica',
        'concentracion',
        'stock_min',
        'cantidad'
    ];
}
