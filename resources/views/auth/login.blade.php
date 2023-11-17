<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn btn-primary ml-5">{{ __('Log in') }}</button>

            </div>
        </form>
    </x-authentication-card> --}}

    <div class="bg-no-repeat bg-cover bg-center relative"
        style="background-image: url(https://images.unsplash.com/photo-1695632844647-d9252f33100d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3870&q=80);">
        <div class="absolute bg-gradient-to-b from-slate-600 to-slate-500 opacity-70 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
            <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
                <div class="self-start hidden lg:flex flex-col  text-white">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl">Bienvenido/a </h1>
                    <p class="pr-3">Lorem ipsum is placeholder text commonly used in the graphic, print,
                        and publishing industries for previewing layouts and visual mockups</p>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
            <div class="flex justify-center self-center  z-10">
                <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">

                    <a href="{{ route("auth_microsoft") }}"  type="submit"
                        class="w-full flex justify-center bg-indigo-600  hover:bg-indigo-700 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                        Ingresar con cuenta de Microsoft
                </a>

                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <h3 class="font-semibold text-2xl text-gray-800">Ingreso </h3>
                            <p class="text-gray-500">Por favor, ingrese sus datos de acceso.</p>
                        </div>
                        <div class="space-y-5">
                            <div class="space-y-2">
                                <label
                                    class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                                <input id="email" name="email" type="email"
                                    class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-indigo-400"
                                    :value="old('email')" required autofocus autocomplete="username">
                            </div>
                            <div class="space-y-2">
                                <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                    Contraseña
                                </label>
                                <input id="password"
                                    class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-indigo-400"
                                    type="password" name="password" required autocomplete="current-password">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">

                                    <label for="remember_me" class="flex items-center">
                                        <x-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                                    </label>

                                </div>
                                <div class="text-sm ml-4">
                                    <a href="#" class="text-indigo-500 hover:text-indigo-600">
                                        Recuperar contraseña
                                    </a>
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center bg-indigo-600  hover:bg-indigo-700 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                    Ingresar
                                </button>
                            </div>
                        </div>

                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
