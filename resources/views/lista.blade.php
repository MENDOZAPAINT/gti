<div class="py-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($peliculas as $pelicula)
            <div
                class="bg-gradient-to-r from-gray-700 via-gray-900 to-black rounded-3xl shadow-2xl overflow-hidden transform transition duration-300 hover:scale-105">
                <div class="relative">
                    <img src="{{$pelicula->imagen}}"
                        alt="Póster de Inception" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-900/30 to-gray-900"></div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-b from-transparent  via-gray-800 to-black">
                        <div class="flex justify-between items-end">
                            <div>
                                <h2 class="font-bold text-1xl text-white mb-1 drop-shadow-lg">
                                    {{ $pelicula->titulo_distribucion }}</h2>
                                <span
                                    class="text-sm text-gray-300 font-medium bg-gray-800/60 px-2 py-1 rounded-full autores">
                                    Actor(s): {{ $pelicula->personajes->pluck('actor.nombre')->implode(', ') }}
                                </span>
                            </div>
                            <p class="text-gray-300 text-sm font-semibold bg-gray-800/60 px-2 py-1 rounded-full">
                                {{ $pelicula->duracion }}m
                            </p>
                        </div>
                    </div>
                    <span
                        class="absolute top-4 right-4  text-gray-900 text-xs font-bold px-2 py-1 rounded-full flex items-center">
                        <x-star name="calificacion" label="" :stars="5" :rating="$pelicula->averageRating() ?? 0" />
                    </span>
                </div>
                <div class="p-6 relative">
                    <div class="flex flex-wrap gap-2 mb-3">
                        <span
                            class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white text-xs px-2 py-1 rounded-full">
                            {{ $pelicula->genero }}
                        </span>
                    </div>
                    <div>
                        @php
                            $cinesMostrados = [];
                        @endphp
                        @foreach ($pelicula->funcions as $funcion)
                            @php
                                $cineNombre = $funcion->sala->cine->nombre;
                                $salaId = $funcion->sala->id; // Obtiene el ID de la sala
                                if (!in_array($cineNombre, $cinesMostrados)) {
                                    $cinesMostrados[$cineNombre] = $salaId; // Guarda el cine y el ID de la sala
                                }
                            @endphp
                        @endforeach

                        @if (count($cinesMostrados) > 0)
                            <span>Cines disponibles: </span>
                            <span>
                                @foreach ($cinesMostrados as $nombreCine => $salaId)
                                <a href="{{ route('pelicula.cines', $pelicula->id) }}" class="text-blue-600 hover:underline transition duration-300 ease-in-out">
                                    {{ $nombreCine }}
                                </a>
                                {{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            </span>
                        @else
                            <span>No hay cines disponibles.</span>
                        @endif
                    </div>




                    <p class="text-gray-300 text-sm mb-4 line-clamp-2">
                        {{ $pelicula->resumen }}
                    </p>
                    <div class="flex justify-between items-center">
                        <button
                            class="bg-gradient-to-r from-indigo-900 via-purple-800 to-red-700 hover:from-indigo-800 hover:via-purple-700 hover:to-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Ver ahora
                        </button>

                        <div class="flex space-x-2">
                            <button class="text-gray-400 hover:text-pink-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                            <x-link :href="route('opiniones.create', ['pelicula_id' => $pelicula->id])" :active="request()->routeIs('opiniones.create')">
                                {{ __('Comentar') }}
                            </x-link>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<style>
    .autores {
        font-size: 10px;
    }
</style>
