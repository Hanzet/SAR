<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sar_tipos_recursos extends Model
{
    use HasFactory;

    protected $table = 'sar_tipos_recursos';

    protected $fillable = [
        'id',
        'codigo',
        'tipo',
        'descripcion',
        'maxTiempo',
        'estado',
    ];

    public function SarAtributos(): BelongsTo
    {
        return $this->belongsTo(Sar_atributos::class, '');
    }
}
