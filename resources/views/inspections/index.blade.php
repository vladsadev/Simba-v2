<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Gestión de Maquinaria') }}
                </h2>
                <p class="text-sm text-gray-600 mt-1">Control y monitoreo de equipos pesados</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Guardar Inspección
                </button>
            </div>
        </div>
    </x-slot>


</x-app-layout>
