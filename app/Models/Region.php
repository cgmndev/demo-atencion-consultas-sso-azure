<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{

    protected $table = 'region';

    protected $fillable = [
        'nombre',
        'codigo'
    ];

    public function comunas(): HasMany
    {
        return $this->hasMany(Comuna::class, 'region_id');
    }

}