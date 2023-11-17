<x-app-layout>
    {{-- SLOT --}}
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <div class="intro-y box">
                <div class="w-full px-5 flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Formulario creción de usuario</h2>
                    <a href="{{ route('admin.usuarios.listar') }}"
                        class="px-4 py-2 text-white bg-slate-500 border-0 focus:outline-none hover:bg-slate-600 rounded text-sm">
                        &#8592 Volver</a>
                </div>

                <hr class="py-3 mx-5" />

                <div id="form-validation" class="p-5">
                    <div class="preview">
                        <livewire:user-form :text-button="$textButton" :user="$user" :updating="$updating" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FIN SLOT --}}
</x-app-layout>
