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
                    Cantidad de salas



                    <div class="container my-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                            <!-- Card 1 -->
                            @forelse ($salas as $sala)
                                <div
                                    class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                                    <div class="relative">
                                        <img src="https://salallena.com.mx/wp-content/uploads/2023/03/cinepolis-mitikah.jpg"
                                            alt="Card image" class="w-full h-48 sm:h-56 object-cover">
                                        <div
                                            class="absolute top-2 right-2 sm:top-4 sm:right-4 bg-gradient-to-r from-purple-600 to-purple-800 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full uppercase tracking-wide shadow-md">
                                            New</div>
                                    </div>
                                    <div class="p-0 sm:p-3">
                                        <h2 class="text-xl sm:text-2xl font-semibold text-white mb-2">
                                            {{ $sala->nombre }}
                                        </h2>
                                        {{-- <div
                                            class="text-white text-xs font-bold px-2 py-1 rounded-full inline-block mb-3">
                                            {{ $sala->numero_identificador }}
                                        </div> --}}

                                        <p class="text-sm sm:text-base text-gray-300 mb-2 leading-relaxed">
                                            <a href="#"
                                                class="bg-gradient-to-r from-teal-800 to-teal-900 text-white text-xs font-bold px-2 py-1 rounded-full inline-block mb-3">
                                                <span>Butacas disponibles: </span>{{ $sala->cantidad_butacas }}
                                            </a>
                                        </p>

                                        <div class="flex items-center justify-between">
                                            <x-link :href="route('cines.show', $cine)" :active="request()->routeIs('cines.create')">
                                                {{ __('Reservar sala') }}
                                            </x-link>
                                            <button
                                                class="bg-gradient-to-r from-purple-600 to-purple-800 hover:from-purple-700 hover:to-purple-900 text-white font-bold py-2 px-3 sm:px-4 rounded-lg text-sm transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                                                Explore
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-600 dark:text-gray-300">No hay salas disponibles para este
                                    cine.
                                </p>
                            @endforelse

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
