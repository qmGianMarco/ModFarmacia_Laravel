<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteMed extends Model
{
    use HasFactory;

    public $table = 'lotemed';

    protected $fillable = [
        'id',
        'fecha_ingreso',
        'fecha_venc',
        'cantidad',
        'precio_unitario',
        'medicamento_id'
    ];

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class, 'medicamento_id');
    }
}
