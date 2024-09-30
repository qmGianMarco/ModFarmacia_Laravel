<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteMed extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fecha_ingreso',
        'fecha_venc',
        'cantidad',
        'medicamento_id'
    ];
}
