<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariacionMed extends Model
{
    use HasFactory;

    public $table = 'variacion_med';

    protected $fillable = [
        'id',
        'cantidad',
        'tipo',
        'motivo',
        'fecha',
        'usuario_id',
        'lote_med_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
    public function loteMed()
    {
        return $this->belongsTo(LoteMed::class, 'lote_med_id');
    }
}
