<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Consulta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ConsultaFormGestionar extends Component
{
    public Consulta $consulta;

    public function rules(): array
    {
        return [
            'consulta.respuesta_titulo' => ['required', 'string', 'min:2', 'max:255'],
            'consulta.respuesta_mensaje' => ['required', 'string', 'min:2', 'max:20000'],
        ];
    }

    public function respuesta(): RedirectResponse|Redirector
    {
        $this->validate();

        $this->consulta->titulo = Str::title($this->consulta->titulo);
        $this->consulta->mensaje = $this->consulta->mensaje;
        $this->consulta->estado = "Cerrada";

        $this->consulta->save();

        return redirect()->to(route("admin.consultas.listar"));
    }


    public function render()
    {
        return view('livewire.consulta-form-gestionar');
    }
}
