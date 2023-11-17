<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consulta extends Model
{
    use HasFactory;

    protected $table = 'consulta';

    protected $fillable = [
        'CODIGO',
        'MOTIVO_CONSULTA_ID',
        'TITULO',
        'MENSAJE',
        'ALUMNO_ID',
        'OPERADOR_ID',
        'ESTADO',
        'ARCHIVO',
        'RESPUESTA_TITULO',
        'RESPUESTA_MENSAJE'
    ];

    public function motivoconsulta(): BelongsTo
    {
        return $this->belongsTo(MotivoConsulta::class, 'motivo_consulta_id');
    }

    public function operador(): BelongsTo
    {
        return $this->belongsTo(User::class, 'operador_id');
    }

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(User::class, 'alumno_id');
    }
}
