<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Machines') }}
        </h2>
    </x-slot>

{{----}}
    <section class="py-20">
{{--        Contenedor de elemtos --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4 md:py-6 lg:py-8 shadow-2xl sm:rounded-lg
        space-y-4">
                <x-card-machine/>

                <x-card-machine/>

                <x-card-machine/>
        </div>
    </section>
</x-app-layout>
