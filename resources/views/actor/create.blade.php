<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Crear directores
                    <form method="POST" action="{{ route('actores.store') }}">
                        @csrf

                        <div>
                            <x-input-label for="nombre" :value="__('Nombre del actor')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus autocomplete="nombre" />
                        </div>

                        <div>
                            <x-input-label for="nacionalidad" :value="__('Nacionalidad')" />
                            <x-text-input id="nacionalidad" class="block mt-1 w-full" type="text" name="nacionalidad"
                                :value="old('nacionalidad')" required autofocus autocomplete="nacionalidad" />
                        </div>

                        <div>
                            <x-input-label for="cantidad_peliculas_actuadas" :value="__('Cantidad de películas actuadas')" />
                            <x-text-input id="cantidad_peliculas_actuadas" class="block mt-1 w-full" type="number"
                                name="cantidad_peliculas_actuadas" :value="old('cantidad_peliculas_actuadas')" required autofocus
                                autocomplete="cantidad_peliculas_actuadas" min="0" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar Actor') }}
                            </x-primary-button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
