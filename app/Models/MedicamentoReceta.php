<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoReceta extends Model
{
    use HasFactory;

    public $table = 'medicamento_receta';

    protected $fillable = [
        'cantidad',
        'precio_total',
        'medicamento_id',
        'receta_id'
    ];

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class, 'medicamento_id');
    }
    public function receta()
    {
        return $this->belongsTo(Receta::class, 'receta_id');
    }
}
