<div class="bg-white py-6 px-6 rounded shadow-md">
    <form wire:submit.prevent="upsert">


        {{-- EMAIL --}}
        <div class="grid w-full mt-5">
            <label for="email" class="form-label w-full flex flex-col sm:flex-row">
                {{ __('Email') }} <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Email') }}</span>
            </label>
            <input type="email" name="email" id="email" wire:model.defer="user.email"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('user.email') border-2 border-red-600 @enderror">
            @error('user.email')
                <div class="text-red-600 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- ROL --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="rol_id" class="block text-sm font-medium text-gray-700">Rol</label>
            <select id="rol_id" wire:model="rolSeleccionado"
                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-2 border-red-600 @enderror">
                <option value="">Seleccione un Rol</option>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                @endforeach
            </select>
            @error('rolSeleccionado')
                <div class="text-red-600 mt-2">{{ $message }}</div>
            @enderror
        </div>

        {{-- NOMBRE --}}
        <div class="grid w-full">
            <label for="name" class="form-label w-full flex flex-col sm:flex-row">
                {{ __('Nombre') }} <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerido') }}</span>
            </label>
            <input type="text" name="name" id="name" wire:model.defer="user.name"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('user.name') border-2 border-red-600 @enderror">
            @error('user.name')
                <div class="text-red-600 mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- REGION --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="region_id" class="block text-sm font-medium text-gray-700">Región</label>
            <select id="region_id" wire:model.live="regionSeleccionada"
                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-2 border-red-600 @enderror">
                <option value="">Seleccione una Región</option>
                @foreach ($regiones as $region)
                    <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                @endforeach
            </select>
            @error('regionSeleccionada')
                <div class="text-red-600 mt-2">{{ $message }}</div>
            @enderror
        </div>

        {{-- COMUNA --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="comuna_id" class="block text-sm font-medium text-gray-700">Comuna</label>
            <select id="comuna_id" wire:model="comunaSeleccionada"
                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') border-2 border-red-600 @enderror">
                <option value="">Seleccione una Comuna</option>
                @foreach ($comunas as $comuna)
                    <option value="{{ $comuna->id }}">{{ $comuna->nombre }}</option>
                @endforeach
            </select>
            @error('comunaSeleccionada')
                <div class="text-red-600 mt-2">{{ $message }}</div>
            @enderror
        </div>

        @if (!$updating)
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
            {{-- PASSWORD --}}
            <div>
                <label for="password" class="form-label w-full flex flex-col sm:flex-row">
                    {{ __('Contraseña') }} <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerida') }}</span>
                </label>
                <input type="password" name="password" id="password" wire:model.defer="password"
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('password') border-2 border-red-600 @enderror">
                @error('password')
                    <div class="text-red-600 mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- PASSWORD CONFIRM --}}
            <div>
                <label for="password_confirmation" class="form-label w-full flex flex-col sm:flex-row">
                    {{ __('Confirmar Contraseña') }} <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ __('Requerida') }}</span>
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    wire:model.defer="password_confirmation"
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('password_confirmation') border-2 border-red-600 @enderror">
                @error('password_confirmation')
                    <div class="text-red-600 mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        @endif



        <button type="submit"
            class="mt-5 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ $textButton }}</button>
    </form>
</div>
