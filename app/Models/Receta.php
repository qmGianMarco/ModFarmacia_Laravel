<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    public $table = 'receta';

    protected $fillable = [
        'id',
        'fecha',
        'monto',
        'periodo_academico',
        'alumno_id',
        'medico_id',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumnno_id');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}
