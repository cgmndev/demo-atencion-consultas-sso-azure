<x-app-layout>

    <div class="w-full flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Lista de Usuarios</h2>
        <a href="{{ route('admin.usuarios.crear') }}" class="px-4 py-2 text-white bg-indigo-500 border-0 focus:outline-none hover:bg-indigo-600 rounded text-sm">Crear Usuario</a>
    </div>

    <hr class="py-3" />

    <div class="w-full">
        <livewire:users-table />
    </div>

</x-app-layout>
