<x-app-layout>
    <div class="w-full">
        <livewire:ver-consulta :consulta="$consulta" />
    </div>

    <div class="text-center w-full mt-5">

        <a class="bg-slate-600 hover:bg-slate-700 py-2 px-8 rounded text-white font-semibold"
            href="{{ route('alumno.consulta.downloadPDF', $consulta->id) }}">Descargar PDF</a>

    </div>

</x-app-layout>
