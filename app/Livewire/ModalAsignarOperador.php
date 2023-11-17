<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Consulta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Gate;

class ModalAsignarOperador extends ModalComponent
{
    public Consulta $consulta;
    public $operadorSeleccionado = null;

    public function mount()
    {
        if ($this->consulta->operador) {
            $this->operadorSeleccionado = $this->consulta->operador->id;
        }
    }
    public function rules(): array
    {
        return [
            "operadorSeleccionado" => "required",
        ];
    }

    public function asignar(): RedirectResponse|Redirector
    {
        $this->validate();

        // Opcion 1: En este caso se asume que el objeto se encuentra actualizado.
        // $this->consulta->operador_id  = $this->operadorSeleccionado;
        // $this->consulta->save();

        // Opcion 2: Se busca el objeto y se actualiza. Nos aseguramos de que no se han realizado cambios en el último segundo.
        $consulta = Consulta::find($this->consulta->id);
        $consulta->operador_id = $this->operadorSeleccionado;
        $consulta->save();

        return redirect()->to(route("admin.consultas.listar"));
    }

    public function render()
    {
        return view('livewire.modal-asignar-operador', [
            "operadores" => \App\Models\User::where('rol_id', 2)->get()
        ]);
    }
}
