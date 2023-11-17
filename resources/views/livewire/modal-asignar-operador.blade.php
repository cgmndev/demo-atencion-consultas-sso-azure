<div class="p-5">

    {{-- {{ $consulta->id }} --}}

    <div class="text-lg font-black">Asignar Operador</div>
    <form wire:submit.prevent="asignar">
        <div class="col-span-6 sm:col-span-3 mt-5">
            <label for="operador_id" class="block text-sm font-medium text-gray-700">Operador</label>
            <select id="operador_id" wire:model="operadorSeleccionado"
                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-2 border-red-600 @enderror">
                <option value="">Seleccione un Operador</option>
                @foreach ($operadores as $operador)
                    <option value="{{ $operador->id }}">{{ $operador->name }}</option>
                @endforeach
            </select>
            @error('operadorSeleccionado')
                <div class="text-red-600 mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="mt-7 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg mx-auto">Asignar</button>
    </form>
</div>
