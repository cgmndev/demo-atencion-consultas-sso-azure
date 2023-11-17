<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MotivoConsulta extends Model
{
    use HasFactory;
    protected $table = 'motivo_consulta';

    protected $fillable = [
        'CODIGO',
        'NOMBRE',
    ];

    public function consultas(): HasMany
    {
        return $this->hasMany(Consulta::class, 'motivo_consulta_id');
    }

}
