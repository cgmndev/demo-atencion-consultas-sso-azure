<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased h-full bg-slate-100" style="height: 100% !important">

    <x-banner />

    <div class="h-full min-h-full bg-gray-100 ">

        <div class='md:flex  min-h-full h-full w-full '>

            {{-- MENU AZUL IZQUIERDO --}}
            @livewire('navigation-menu')
            {{-- FIN MENU AZUL IZQUIERDO --}}

            <div class="flex-1 flex-col w-full h-full min-h-full md:pl-24">

                {{-- MENU SUPERIOR --}}
                <nav class="bg-navbar mt-10 md:mt-0 fixed w-full z-10 top-0 h-auto md:pr-24">
                    <div class="flex flex-row h-20">

                        <div class=' border-b-2 border-slate-300 flex flex-row w-full py-4 md:py-2 '>
                        </div>

                        <div class="flex border-b-2 border-slate-300 ">
                            <a class="flex flex-row items-center align-middle cursor-pointer px-4 pr-6 pt-1"
                                href="{{ route('profile.show') }}">
                                <span class="button-main-3 px-2 py-2 rounded-full">
                                    <x-ri-user-fill class="h-10 w-10 mx-auto" />
                                </span>

                                <div class="hidden sm:flex flex-row pt-1">
                                    <div class="flex flex-col">
                                        <span
                                            class="text-sm font-extrabold text-gray-800  text-left leading-none pl-3 whitespace-nowrap">
                                            {{ auth()->user()->name }}
                                        </span>
                                        <span
                                            class="text-xs font-semibold text-gray-400  text-left pl-3 whitespace-nowrap py-1">
                                            {{ auth()->user()->email }}
                                        </span>
                                        <span
                                            class="pl-3 text-xs font-extrabold text-gray-700 mt-0 pt-0 whitespace-nowrap">
                                            {{ auth()->user()->rol->nombre }}
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                </nav>
                {{-- FIN MENU SUPERIOR --}}


                {{-- CONTENIDO --}}
                <div class="pl-3 md:pl-10 pr-3 md:pr-10 ">
                    <div class="pt-32 md:pt-28">
                        {{ $slot }}
                    </div>
                </div>
                {{-- FIN CONTENIDO --}}

            </div>
        </div>


    </div>

    @stack('modals')

    @livewireScripts
    @livewire('wire-elements-modal')
</body>

</html>
