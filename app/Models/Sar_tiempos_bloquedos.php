<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sar_tiempos_bloquedos extends Model
{
    use HasFactory;

    protected $table = 'sar_tiempos_bloquedos';

    protected $filalble = [
        'sar_recursos_id',
        'tipo_recurso',
        'fechaInicio',
        'fechaFin',
        'horaInicio',
        'horaFin',
        'motivo'
    ];

    public function SarRecursos(): HasMany
    {
        return $this->hasMany(Sar_recursos::class, 'sar_recursos_id');
    }
}
