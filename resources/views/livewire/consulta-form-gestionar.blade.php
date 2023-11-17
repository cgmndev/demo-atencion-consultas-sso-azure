<div class="p-8 bg-slate-300 rounded-lg mt-6">
<div class="text-lg font-black mb-2">Respuesta Operador</div>
    <form wire:submit.prevent="respuesta">
        {{-- RESPUESTA TITULO --}}
        <div class="grid w-full">
            <label for="respuesta_titulo" class="form-label w-full flex flex-col sm:flex-row">
                {{ __('Título') }} <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerido') }}</span>
            </label>
            <input type="text" name="respuesta_titulo" id="respuesta_titulo" wire:model.defer="consulta.respuesta_titulo"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('consulta.titulo') border-2 border-red-600 @enderror">
            @error('consulta.respuesta_titulo')
                <div class="text-red-600 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Textarea para el mensaje --}}
        <div class="grid w-full">
            <label for="respuesta_mensaje" class="form-label w-full flex flex-col sm:flex-row">
                {{ __('Mensaje') }} <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerido') }}</span>
            </label>
            <textarea name="respuesta_mensaje" id="respuesta_mensaje" wire:model.defer="consulta.respuesta_mensaje"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-10 transition-colors duration-200 ease-in-out @error('consulta.mensaje') border-2 border-red-600 @enderror"></textarea>
            @error('consulta.respuesta_mensaje')
                <div class="text-red-600 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit"
        class="mt-5 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Responder</button>

    </form>
</div>
