<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sar_estado_recursos extends Model
{
    use HasFactory;

    protected $table = "sar_estado_recursos";

    protected $fillable = [
        'descripcion',
        'afectaReserva'
    ];
}
