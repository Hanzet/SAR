<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Areas extends Model
{
    use HasFactory;

    protected $table = 'areas';

    public function Areas(): HasMany
    {
        return $this->hasMany(Areas::class, 'areas_id');
    }

}
