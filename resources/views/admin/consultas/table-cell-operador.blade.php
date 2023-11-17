<div class="flex flex-row">
    @if ((in_array(auth()->user()->rol->codigo, ['ADMIN'])) && ($value->estado == "Abierta"))
        <button
            onclick="Livewire.dispatch('openModal', { component: 'modal-asignar-operador', arguments: { consulta: {{ $value->id }} }})"
            class="ml-3 px-2 py-1 bg-slate-200 bg-opacity-75 hover:bg-opacity-70 hover:bg-slate-300 text-xs text-slate-600 rounded ">Asignar
            Operador</button>
    @endif

    @if ($value->estado == 'Abierta')
        <a href="{{ route('admin.consulta.gestionar', $value->id) }}"
            class="ml-3 text-white bg-slate-600 border-0 py-1 px-3 focus:outline-none hover:bg-slate-700 rounded text-sm">Gestionar</a>
    @else
        <a href="{{ route('admin.consulta.ver', $value->id) }}"
            class="ml-3 text-white bg-slate-600 border-0 py-1 px-3 focus:outline-none hover:bg-slate-700 rounded text-sm">Ver</a>
    @endif
</div>
