<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Consulta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class ConsultaForm extends Component
{
    use WithFileUploads;

    #[Rule('image|max:1024')]
    public $archivo;

    public Consulta $consulta;
    public $motivoConsultaSeleccionado = null;
    public string $textButton;
    public bool $updating = false;



    public function rules(): array
    {
        return [
            'consulta.titulo' => ['required', 'string', 'min:2', 'max:255'],
            'consulta.mensaje' => ['required', 'string', 'min:2', 'max:20000'],
            "motivoConsultaSeleccionado" => "required",
            'archivo' => 'required|image|mimes:jpeg,png|max:10000',
        ];
    }

    public function upsert(): RedirectResponse|Redirector
    {
        $this->validate();

        $this->consulta->titulo = Str::title($this->consulta->titulo);
        $this->consulta->mensaje = $this->consulta->mensaje;
        $this->consulta->motivo_consulta_id = $this->motivoConsultaSeleccionado;
        $this->consulta->alumno_id = auth()->user()->id;

        $this->archivo->store("uploads", "public");
        $this->consulta->archivo = $this->archivo;

        $this->consulta->codigo = Str::random(10);
        $this->consulta->estado = "Abierta";


        $this->consulta->save();

        return redirect()->to(route("alumno.consultas.listar"));
    }

    public function render(): Renderable
    {
        return view('livewire.consulta-form', [
            "motivos_consulta" => \App\Models\MotivoConsulta::all(),
        ]);
    }




}
