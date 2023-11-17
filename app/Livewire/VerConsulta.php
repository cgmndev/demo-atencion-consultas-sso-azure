<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Consulta;

class VerConsulta extends Component
{
    public Consulta $consulta;

    public function render()
    {
        return view('livewire.ver-consulta');
    }
}
