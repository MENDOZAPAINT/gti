<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Cards -->
        @foreach ($personajes as $personaje)
            <div class="bg-gradient-to-br rounded-3xl overflow-hidden shadow-2xl {{ $personaje->color }}">
                <div class="relative">
                    <img class="w-full h-64 object-cover object-center"
                        src="{{$personaje->pelicula->imagen}}"
                        alt="Imagen de Tony Stark" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/90 to-transparent">
                        <h2 class="text-3xl font-bold tracking-tight text-white">Tony Stark</h2>
                        <p class="text-lg text-gray-300 mt-2">El Vengador Blindado</p>
                    </div>
                </div>
                <div class="p-6 bg-white/10">
                    <h3 class="mb-4 text-2xl font-semibold text-blue-300">
                        {{ $personaje->pelicula->titulo_distribucion }}</h3>
                    <p class="mb-4 text-gray-100 leading-relaxed">Genio, multimillonario, playboy, filántropo. Tony
                        Stark es
                        el héroe blindado conocido como Iron Man, luchando por la justicia como miembro clave de los
                        Vengadores.</p>
                    <div class="mb-4 text-sm text-gray-300 space-y-2">
                        <p><span class="font-semibold text-gray-100">Interpretado por:</span>
                            {{ $personaje->actor->nombre }}</p>
                        <p><span class="font-semibold text-gray-100">Año de estreno:</span> 2008</p>
                        <p><span class="font-semibold text-gray-100">Franquicia:</span> Marvel Cinematic Universe</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800">
                            Ver más
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <div class="flex space-x-2">
                            <button class="p-2 text-gray-300 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-300 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
