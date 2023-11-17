<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
{

    public function listar()
    {
        $indicadores = [
            'total_consultas' => Consulta::count(),
            'total_consultas_pendientes' => Consulta::where('estado', 'Abierta')->count(),
            'total_consultas_gestionadas' => Consulta::where('estado', 'Cerrada')->count()

        ];

        return view('admin.dashboard', compact('indicadores'));
    }

}
