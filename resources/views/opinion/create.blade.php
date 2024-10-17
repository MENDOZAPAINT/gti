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
                    Crear opiniones
                    <form method="POST" action="{{ route('opiniones.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="">

                                <div>
                                    <x-input-label for="nombre_persona" :value="__('Nombre de la Persona')" />
                                    <x-text-input id="nombre_persona" class="block mt-1 w-full" type="text"
                                        name="nombre_persona" :value="old('nombre_persona')" required autofocus
                                        autocomplete="nombre_persona" />
                                </div>

                                <div>
                                    <x-input-label for="edad" :value="__('Edad')" />
                                    <x-text-input id="edad" class="block mt-1 w-full" type="number" name="edad"
                                        :value="old('edad')" required autofocus autocomplete="edad" />
                                </div>

                                <div>
                                    <x-input-label for="fecha_registro" :value="__('Fecha de Registro')" />
                                    <x-text-input id="fecha_registro" class="block mt-1 w-full" type="date"
                                        name="fecha_registro" :value="old('fecha_registro')" required autofocus
                                        autocomplete="fecha_registro" />
                                </div>
                                <div>
                                    <x-input-label for="calificacion" :value="__('Calificación')" />
                                    <x-select id="calificacion" name="calificacion" class="block mt-1 w-full" required>
                                        <option value="" disabled selected>Seleccione una calificación</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </x-select>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <x-input-label for="comentario" :value="__('Comentario')" />
                                    <x-textarea id="comentario" class="block mt-1 w-full" name="comentario" required
                                        autofocus :value="old('comentario')"></x-textarea>
                                </div>

                                <div>
                                    <x-input-label for="numero_identificador" :value="__('Número Identificador')" />
                                    <x-text-input id="numero_identificador" class="block mt-1 w-full" type="number"
                                        name="numero_identificador" :value="old('numero_identificador')" required autofocus
                                        autocomplete="numero_identificador" />
                                </div>

                                <div>
                                    <x-input-label for="pelicula_id" :value="__('Seleccionar Película')" />
                                    <x-select id="pelicula_id" name="pelicula_id" class="block mt-1 w-full" required>
                                        <option value="" disabled selected>Seleccione una película</option>
                                        @foreach ($peliculas as $pelicula)
                                            <option value="{{ $pelicula->id }}">{{ $pelicula->titulo_distribucion }}
                                            </option>
                                        @endforeach
                                    </x-select>
                                </div>
                            </div>

                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar Opinión') }}
                            </x-primary-button>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
