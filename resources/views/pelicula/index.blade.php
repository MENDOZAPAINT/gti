<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 text-gray-900 dark:text-gray-100">
                    <x-link :href="route('peliculas.create')" :active="request()->routeIs('peliculas.create')">
                        {{ __('Agregar Peliculas') }}
                    </x-link>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-2">
                        @foreach ($peliculas as $pelicula)
                            <div
                                class="bg-gradient-to-r from-gray-800 to-gray-900 dark:from-gray-900 dark:to-black text-white p-4 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                                <h3 class="text-lg font-semibold mb-1">{{ $pelicula->titulo_distribucion }}</h3>
                                <p class="text-sm">{{ $pelicula->resumen }}</p>
                                <x-link :href="route('opiniones.create', ['pelicula_id' => $pelicula->id])" :active="request()->routeIs('opiniones.create')">
                                    {{ __('Comentar') }}
                                </x-link>
                                {{-- <x-link :href="route('#', ['pelicula_id' => $pelicula->id])" :active="request()->routeIs('#')">
                                    {{ __('Ver') }}
                                </x-link> --}}

                                <p class="text-sm">
                                    Comentarios: {{ $pelicula->opinions->count() }}
                                </p>
                                <x-star name="calificacion" label="Calificación:" :stars="5" :rating="$pelicula->averageRating() ?? 0" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

