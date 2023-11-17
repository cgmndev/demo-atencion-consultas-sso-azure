<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>

    <div class="flex flex-wrap -mb-4 p-2 pl-8 ">

        <div class="flex flex-wrap w-56 mb-4 bg-white border-gray-300 h-28 mx-2 p-2 rounded-lg border ">
          <span class="w-full font-bold text-base text-center">Total Consultas</span>
          <span class="w-full font-normal text-base text-center"></span>
          <span class="w-full font-bold text-2xl text-center text-green-500">{{ $indicadores['total_consultas'] }}</span>
        </div>

        <div class="flex flex-wrap w-56 mb-4 bg-white border-gray-300 h-28 mx-2 p-2 rounded-lg border ">
          <span class="w-full font-bold text-base text-center">Consultas pendientes</span>
          <span class="w-full font-normal text-base text-center"></span>
          <span class="w-full font-bold text-3xl text-center text-red-500">{{ $indicadores['total_consultas_pendientes'] }}</span>
        </div>

        <div class="flex flex-wrap w-56 mb-4 bg-white  border-gray-300 h-28 mx-2 p-2 rounded-lg border ">
          <span class="w-full font-bold text-base text-center">Consultas gestionadas</span>
          <span class="w-full font-normal text-base text-center"></span>
          <span class="w-full font-bold text-3xl text-center text-green-500">{{ $indicadores['total_consultas_gestionadas'] }}</span>
        </div>

        <div class="flex flex-wrap w-56 mb-4 bg-white  border-gray-300 h-28 mx-2 p-2 rounded-lg border ">
          <span class="w-full font-bold text-base text-center">Otro indicador</span>
          <span class="w-full font-normal text-base text-center"></span>
          <span class="w-full font-bold text-3xl text-center text-slate-500"></span>
        </div>

      </div>


      <livewire:dashboard :indicadores="$indicadores" />
      @livewireChartsScripts

</x-app-layout>
