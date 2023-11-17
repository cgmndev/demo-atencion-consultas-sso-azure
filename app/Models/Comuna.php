<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comuna extends Model
{

    protected $table = 'comuna';

    protected $fillable = [
        'nombre',
        'codigo',
        'region_id'
    ];


    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'comuna_id');
    }

}