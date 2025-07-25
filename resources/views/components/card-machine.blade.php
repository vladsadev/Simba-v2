<x-panel class="flex gap-x-6">
    <div class="">
        <img src="{{Vite::asset('resources/images/simbaHome.webp')}}" alt="" class="w-full md:w-52">
    </div>

    <div class="self-start py-3 md:flex-1 flex flex-col text-sm text-gray-400">
        <a class="">Fabricante: <span>Epiroc</span></a>
        <h3 class="mt-2 font-bold text-xl text-gray-100 group-hover:text-yellow-600 transition-colors duration-300 ">SIMBA
            S7D</h3>
        <p class="mt-auto">Tipo de Combustible: <span>Diesel</span></p>
        <div class="grid grid-cols-2 space-x-4 lg:space-x-8 w-max bg-black">
            <p class="mt-auto">Largo: 12.5 metros </p>
            <p class="mt-auto">Ancho: 12.5 metros </p>
            <p class="mt-auto">Alto: 12.5 metros </p>
        </div>
        <a href="/{{ route('catalog.index') }}"
        class="mt-2 underline text-gray-200 hover:text-white font-semibold">Información Completa</a>
    </div>

    {{--Tags--}}
    <div class="space-x-1 self-start">
        <x-tag>Perforadora</x-tag>
        <x-tag>Tag</x-tag>
    </div>
</x-panel>

