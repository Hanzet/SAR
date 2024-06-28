<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sar_recursos extends Model
{
    use HasFactory;

    protected $table = 'sar_recursos';

    protected $filalble = [
        'sar_tipos_recursos_id',
        'sar_estados_recursos_id',
        'areas_id',
        'codigo',
        'nombreRecurso',
        'notas',
        'equipamiento_adicional',
        'costo_uso',
        'aplicaCredito',
    ];

    public function sarTiposRecursos(): HasMany
    {
        return $this->hasMany(Sar_tipos_recursos::class, 'sar_tipos_recursos_id');
    }

    public function SarEstadosRecursos(): HasMany
    {
        return $this->hasMany(Sar_estado_recursos::class, 'sar_estados_recursos_id');
    }

    public function Areas(): HasMany
    {
        return $this->hasMany(Areas::class, 'areas_id');
    }
}
