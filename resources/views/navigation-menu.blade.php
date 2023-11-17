<div class="flex-none md:flex max-w-full md:max-w-2x1 md:h-full md:min-h-full text-gray-100 ">
    <div
        class="bg-sidebar flex flex-col px-0 text-sm w-full md:w-24 fixed md:min-h-screen z-50 bg-gray-800 text-gray-400 ">

        <div class="h-8 md:h-16 text-white font-medium flex items-center mb-3 md:block md:flex-1 ">
            <div class="flex flex-row md:flex-col ">
                <h3
                    class="w-32 md:w-full text-left md:text-center text-slate-500 font-semibold text-sm my-auto pt-5 md:pt-5 ml-3 md:ml-0">
                    Sistema de Atención de consultas
                </h3>
            </div>
        </div>

        <div id="menu-detalle" class='hidden px-2 md:block md:flex-1 text-sm '>
            <div class="my-5" />


            {{-- MENU ROLES ADMINISTRADOR Y OPERADOR. --}}
            @if (in_array(auth()->user()->rol->codigo, ['ADMIN', 'OPER']))
                <x-nav-link href="{{ route('admin_dashboard') }}" :active="request()->routeIs('admin_dashboard')">
                    <x-ri-dashboard-fill class="h-6 w-6 mx-auto" />
                    <span class='inline-block text-xs w-auto md:w-full ml-2 md:ml-0'>
                        Dashboard
                    </span>
                </x-nav-link>

                <x-nav-link href="{{ route('admin.consultas.listar') }}" :active="request()->routeIs('admin.consultas.listar')">
                    <x-ri-question-fill class="h-6 w-6 mx-auto" />
                    <span class='inline-block text-xs w-auto md:w-full ml-2 md:ml-0'>
                        Consultas
                    </span>
                </x-nav-link>
            @endif


            {{-- SOLO ADMIN --}}
            @if (in_array(auth()->user()->rol->codigo, ['ADMIN']))
                <x-nav-link href="{{ route('admin.usuarios.listar') }}" :active="request()->routeIs('admin.usuarios.listar')">
                    <x-ri-user-fill class="h-6 w-6 mx-auto" />
                    <span class='inline-block text-xs w-auto md:w-full ml-2 md:ml-0'>
                        Usuarios
                    </span>
                </x-nav-link>
            @endif

            {{-- MENU ROL ALUMNO --}}
            @if (in_array(auth()->user()->rol->codigo, ['ALU']))
                <x-nav-link href="{{ route('alumno.consultas.listar') }}" :active="request()->routeIs('alumno.consultas.listar')">
                    <x-ri-question-fill class="h-6 w-6 mx-auto" />
                    <span class='inline-block text-xs w-auto md:w-full ml-2 md:ml-0'>
                        Consultas
                    </span>
                </x-nav-link>
            @endif
            {{-- FIN MENU ROL ALUMNO --}}


            {{-- BOTON SALIR --}}

                @csrf
                <x-nav-link href="{{ route('logout_microsoft') }}" >
                    <x-ri-logout-circle-r-line class="h-6 w-6 mx-auto" />
                    <span class='inline-block text-xs w-auto md:w-full ml-2 md:ml-0'>
                        Salir
                    </span>
                </x-nav-link>

            {{-- FIN BOTON SALIR --}}

        </div>
    </div>
</div>
</div>
