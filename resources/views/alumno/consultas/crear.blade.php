<x-app-layout>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <div class="intro-y box">
                <div class="w-full px-5 flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Formulario creción de consulta</h2>
                    <a href="{{ route('alumno.consultas.listar') }}"
                        class="px-4 py-2 text-white bg-slate-500 border-0 focus:outline-none hover:bg-slate-600 rounded text-sm"> &#8592 Volver</a>
                </div>

                <hr class="py-3 mx-5" />

                <div id="form-validation" class="p-5">
                    <div class="preview">
                        <livewire:consulta-form :text-button="$textButton" :consulta="$consulta" :updating="$updating" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
