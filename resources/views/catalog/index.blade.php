<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Catalogo de Equipos') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">
        <x-card-machine/>
    </div>

</x-app-layout>
