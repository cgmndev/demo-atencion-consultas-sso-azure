<div class="bg-white py-6 px-6 rounded shadow-md">
    <form wire:submit.prevent="upsert">




        {{-- Motivo Consulta --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="motivo_consulta_id" class="block text-sm font-medium text-gray-700">Motivo Consulta</label>
            <select id="motivo_consulta_id" wire:model="motivoConsultaSeleccionado"
                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-2 border-red-600 @enderror">
                <option value="">Seleccione un Motivo de la Consulta</option>
                @foreach ($motivos_consulta as $motivo)
                    <option value="{{ $motivo->id }}">{{ $motivo->nombre }}</option>
                @endforeach
            </select>
            @error('motivoConsultaSeleccionado')
                <div class="text-red-600 mt-2">{{ $message }}</div>
            @enderror
        </div>

        {{-- TITULO --}}
        <div class="grid w-full">
            <label for="titulo" class="form-label w-full flex flex-col sm:flex-row">
                {{ __('Título') }} <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerido') }}</span>
            </label>
            <input type="text" name="titulo" id="titulo" wire:model.defer="consulta.titulo"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('consulta.titulo') border-2 border-red-600 @enderror">
            @error('consulta.titulo')
                <div class="text-red-600 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Textarea para el mensaje --}}
        <div class="grid w-full">
            <label for="mensaje" class="form-label w-full flex flex-col sm:flex-row">
                {{ __('Mensaje') }} <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerido') }}</span>
            </label>
            <textarea name="mensaje" id="mensaje" wire:model.defer="consulta.mensaje"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-10 transition-colors duration-200 ease-in-out @error('consulta.mensaje') border-2 border-red-600 @enderror"></textarea>
            @error('consulta.mensaje')
                <div class="text-red-600 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <div class="flex w-full items-center justify-center mb-2 mt-5">
            @if ($archivo)
                <img class="w-48 h-48" src="{{ is_string($archivo) ? $archivo : $archivo->temporaryUrl() }}" />
            @else
                <img class="w-48 h-48" src="https://placehold.co/300x300/e2e8f0/e2e8f0" />
            @endif
        </div>

        <div class="flex w-full items-center justify-center bg-grey-lighter">
            <label
                class="w-64 flex flex-col items-center px-4 py-6 bg-indigo-500 text-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-indigo-400 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">{{ __('Selecciona un archivo') }}</span>
                <input name="archivo" accept="image/png,image/jpeg,image/jpg" class="hidden" type="file"
                    wire:model="archivo" />
            </label>
        </div>
        <div class="grid w-full">
            @error('archivo')
                <span class="text-red-600 text-center">{{ $message }}</span>
            @enderror
        </div>



        <button type="submit"
            class="mt-5 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ $textButton }}</button>
    </form>
</div>
