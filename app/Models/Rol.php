<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{

    protected $table = 'rol';

    protected $fillable = [
        'nombre',
        'codigo'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'rol_id');
    }
}