<?php

namespace App\Http\Controllers\alumno;

use App\Http\Controllers\Controller;

use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use Barryvdh\DomPDF\Facade\Pdf;


class ConsultaController extends Controller
{

    public function listar()
    {
        return view('alumno.consultas.listar');
    }

    public function crear()
    {
        return view('alumno.consultas.crear', [
            "updating" => false,
            "consulta" => new Consulta(),
            "title" => "Crear nueva Consulta",
            "formName" => "Formulario de creación de Consulta",
            "textButton" => "Crear Consulta"
        ]);
    }

    public function ver(int $id):Renderable
    {
        $consulta = Consulta::findOrFail($id);

        if ($consulta->alumno_id != auth()->user()->id) {
            abort(403);
        }

        return view('alumno.consultas.ver', [
            "consulta" => $consulta
        ]);
    }

    public function downloadPDF(int $id) {

        $consulta = Consulta::findOrFail($id);

        $pdf = Pdf::loadView('pdf.consulta', ['consulta' => $consulta]);

        return $pdf->download('consulta_'.$consulta->id. '.pdf');
    }

    public function actualizar(Request $request)
    {

    }

    public function eliminar(Request $request)
    {

    }

}
