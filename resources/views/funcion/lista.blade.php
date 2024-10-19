<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
    @foreach ($funciones as $funcion)
        <div
            class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="relative">
                <img src="https://salallena.com.mx/wp-content/uploads/2023/03/cinepolis-mitikah.jpg" alt="Card image"
                    class="w-full h-48 sm:h-56 object-cover">
                <div
                    class="absolute top-2 right-2 sm:top-4 sm:right-4 bg-gradient-to-r from-purple-600 to-purple-800 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full uppercase tracking-wide shadow-md">
                    New</div>
            </div>
            <div class="p-0 sm:p-3">
                <h2
                    class="text-3xl font-extrabold text-blue-200 mb-2 transition duration-300 ease-in-out transform hover:text-blue-300">
                    {{ $funcion->pelicula->titulo_distribucion }}
                </h2>


                <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                    <span class="font-semibold text-blue-400">Sala:</span> {{ $funcion->sala->nombre }}
                </p>

                <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                    <span class="font-semibold text-blue-400">Día:</span> {{ $funcion->dia_semana }}
                </p>

                <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                    <span class="font-semibold text-blue-400">Hora:</span> {{ $funcion->hora_comienzo }}
                </p>

                <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                    <span class="font-semibold text-blue-400">Cine:</span> {{ $funcion->sala->cine->nombre }}
                </p>
                <p class="text-lg text-gray-300 mb-2 leading-relaxed">
                    <span class="font-semibold text-blue-400">Butacas disponibles:</span>
                    {{ $funcion->sala->cantidad_butacas }}
                </p>



                <p class="text-sm sm:text-base text-gray-300 mb-1 leading-relaxed p-0 ">
                    {{-- <span>Salas: </span>{{ $funcion->salas->count() }} --}}
                </p>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-gradient-to-r from-purple-600 to-purple-800 hover:from-purple-700 hover:to-purple-900 text-white font-bold py-2 px-3 sm:px-4 rounded-lg text-sm transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                        Explore
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
