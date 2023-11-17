<div>
    <div class="p-8 bg-white rounded-lg mt-6">
        <div class="text-lg font-black mb-2">Consulta Alumno</div>
        <div class="flex flex-col">
            {{-- MOTIVO CONSULTA --}}
            <div class="text-lg font-extrabold">Motivo Consulta:</div>
            <div class="bg-slate-100 p-3 rounded">{{ $consulta->motivoConsulta->nombre }}</div>

            {{-- ESTADO --}}
            <div class="text-lg font-extrabold mt-5">Estado:</div>
            <div class="p-1 bg-green-200 w-48 text-center">{{ $consulta->estado }}</div>

            {{-- ALUMNO CREA --}}


            <div class="text-lg font-extrabold mt-5">Alumno:</div>
            <div class="bg-slate-100 p-1 rounded">{{ $consulta->alumno?->name }}</div>



            {{-- OPERADOR ASIGNADO --}}
            @if (auth()->user()->rol->codigo != 'ALU')
                <div class="text-lg font-extrabold mt-5">Asignado a:</div>
                <div class="bg-slate-100 p-1 rounded">{{ $consulta->operador?->name }}</div>
            @endif

            {{-- TITULO --}}
            <div class="text-lg font-extrabold mt-5">Título:</div>
            <div class="bg-slate-100 p-1 rounded">{{ $consulta->titulo }}</div>

            {{-- MENSAJE --}}
            <div class="text-lg font-extrabold mt-5">Mensaje:</div>
            <div class="bg-slate-100 p-1 rounded">{{ $consulta->mensaje }}</div>

        </div>
    </div>

    @if ($consulta->estado != 'Abierta')
        <div class="p-8 bg-slate-200 rounded-lg mt-6">
            <div class="text-lg font-black mb-2">Respuesta</div>
            <div class="flex flex-col">

                {{-- TITULO --}}
                <div class="text-lg font-extrabold mt-5">Título:</div>
                <div class="bg-slate-50 p-1 rounded">{{ $consulta->respuesta_titulo }}</div>

                {{-- MENSAJE --}}
                <div class="text-lg font-extrabold mt-5">Mensaje:</div>
                <div class="bg-slate-50 p-2 rounded">{{ $consulta->respuesta_mensaje }}</div>

            </div>
        </div>
    @endif


</div>
