<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sar_atributos extends Model
{
    use HasFactory;

    protected $table = 'sar_atributos';

    protected $fillable = [
        'sar_tipos_recursos_id',
        'atributo',
    ];
}
