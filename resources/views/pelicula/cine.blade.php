<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CINE PARA LAS PELICULAS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 text-gray-900 dark:text-gray-100">
                    <div class="py-2">
                        <h1
                            class="text-4xl font-bold text-center text-white bg-gradient-to-r from-blue-500 to-purple-600 p-6 rounded-lg shadow-lg">
                            {{ $pelicula->titulo_distribucion }}
                        </h1>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                            @foreach ($pelicula->funcions as $funcion)
                                <div
                                    class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                                    <div class="relative">
                                        <img src="https://salallena.com.mx/wp-content/uploads/2023/03/cinepolis-mitikah.jpg"
                                            alt="Card image" class="w-full h-48 sm:h-56 object-cover">
                                        <div
                                            class="absolute top-2 right-2 sm:top-4 sm:right-4 bg-gradient-to-r from-purple-600 to-purple-800 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full uppercase tracking-wide shadow-md">
                                            New
                                        </div>
                                    </div>
                                    <div class="p-0 sm:p-3">
                                        <h2
                                            class="text-3xl font-extrabold text-blue-200 mb-2 transition duration-300 ease-in-out transform hover:text-blue-300">
                                            {{ $funcion->sala->cine->nombre }}
                                        </h2>

                                        <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                                            <span class="font-semibold text-blue-400">Sala:</span>
                                            {{ $funcion->sala->nombre }}
                                        </p>

                                        <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                                            <span class="font-semibold text-blue-400">Día:</span>
                                            {{ $funcion->dia_semana }}
                                        </p>

                                        <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                                            <span class="font-semibold text-blue-400">Hora:</span>
                                            {{ $funcion->hora_comienzo }}
                                        </p>

                                        <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                                            <span class="font-semibold text-blue-400">Butacas disponibles:</span>
                                            {{ $funcion->sala->cantidad_butacas }}
                                        </p>

                                        <button x-data="{}"
                                            x-on:click="$dispatch('open-modal', 'confirm-reserva'); $dispatch('update-reserva', { 
                                                titulo: '{{ $pelicula->titulo_distribucion }}',
                                                cine: '{{ $funcion->sala->cine->nombre }}',
                                                sala: '{{ $funcion->sala->nombre }}',
                                                dia: '{{ $funcion->dia_semana }}',
                                                hora: '{{ $funcion->hora_comienzo }}',
                                                butacas: '{{ $funcion->sala->cantidad_butacas }}'
                                            })"
                                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold w-48 h-12 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                                            {{ __('Reservar película') }}
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Modal de reserva -->
                    @include('pelicula.sala')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('reserva', {
            titulo: '',
            cine: '',
            sala: '',
            dia: '',
            hora: '',
            butacas: ''
        });

        window.addEventListener('update-reserva', (event) => {
            Alpine.store('reserva', event.detail);
        });
    });
</script>
