<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">






                <div class="p-2 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-10 my-2">
                        <!-- Primera columna: Detalles de la película -->
                        <div class="mx-0">
                            <h2 class="text-xl font-bold py-2">Detalles de la película</h2>
                            <div class="max-w-lg mx-0">
                                <div class="bg-gray-800 dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden">
                                    <div class="p-6">
                                        <h2 class="text-xl font-bold text-white mb-2">Título:
                                            {{ $pelicula->titulo_original }}</h2>
                                        <div class="flex items-center justify-between">
                                            <p class="text-gray-300 mb-4"><strong class="text-white">Género:</strong>
                                                {{ $pelicula->genero }}</p>
                                            <p class="text-gray-300 mb-4"><strong class="text-white">Idioma:</strong>
                                                {{ $pelicula->idioma_original }}</p>
                                        </div>

                                        <div class="flex items-center justify-between">
                                            <p class="text-gray-300 mb-4"><strong class="text-white">Año de
                                                    producción:</strong> {{ $pelicula->ano_produccion }}</p>
                                        </div>
                                        <p class="text-gray-300 mb-4"><strong class="text-white">Resumén:</strong>
                                            {{ $pelicula->resumen }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Segunda columna: Comentario -->
                        <div class="">
                            <h2 class="text-xl font-bold py-2">Comentario sobre la película</h2>
                            <form method="POST" action="{{ route('opiniones.store') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="comentario"
                                        class="block text-sm font-medium text-gray-700 dark:text-white mb-2">Comentario:</label>
                                    <x-textarea id="comentario" class="block mt-1 w-full" name="comentario" required
                                        autofocus :value="old('comentario')"></x-textarea>
                                </div>
                                <x-star-input name="calificacion" label="Calificación de la película:" :stars="5"
                                    :initial-rating="0" />

                                <input type="hidden" name="pelicula_id" value="{{ $pelicula->id }}">

                                <button type="submit"
                                    class="w-full bg-blue-900 hover:bg-blue-800 text-white font-semibold py-2 rounded-lg transition duration-300">
                                    Enviar Comentario
                                </button>
                            </form>
                        </div>

                        <!-- Segunda fila: Información adicional que ocupa todo el ancho -->
                        <div class="col-span-full">
                            <h2 class="text-xl font-bold py-2">Comentarios mas recientes</h2>
                            <div class="bg-gray-800 dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden p-6 relative">

                                <!-- Total de comentarios estilizado y posicionado en la esquina -->
                                <p
                                    class="text-white text-sm bg-blue-900 rounded-full px-4 py-2 absolute right-4 top-4 shadow-md">
                                    <strong>Total de comentarios:</strong> {{ $totalComentarios }}
                                </p>

                                @if ($opinions->isEmpty())
                                    <p class="text-gray-300 mt-10">No hay comentarios para esta película.</p>
                                @else
                                    <ul class="mt-10">
                                        @foreach ($opinions as $comentario)
                                            <li class="mb-4">
                                                <p class="text-gray-300"><span
                                                        class="font-semibold text-white">{{ $comentario->user->name }}:</span>
                                                    {{ $comentario->comentario }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>



</x-app-layout>
