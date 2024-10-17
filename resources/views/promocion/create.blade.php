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
                    Crear promociones
                    <form method="POST" action="{{ route('promociones.store') }}">
                        @csrf
                    
                        <div>
                            <x-input-label for="descripcion" :value="__('Descripción de la promoción')" />
                            <x-textarea id="descripcion" class="block mt-1 w-full" name="descripcion" required autofocus
                                :value="old('descripcion')"></x-textarea>
                        </div>
                    
                        <div>
                            <x-input-label for="descuento" :value="__('Descuento (%)')" />
                            <x-text-input id="descuento" class="block mt-1 w-full" type="number" step="0.01" name="descuento"
                                :value="old('descuento')" required autofocus autocomplete="descuento" />
                        </div>
                    
                        <div>
                            <x-input-label for="pelicula_id" :value="__('Seleccionar Película')" />
                            <x-select id="pelicula_id" name="pelicula_id" class="block mt-1 w-full" required>
                                <option value="" disabled selected>Seleccione una película</option>
                                @foreach($peliculas as $pelicula)
                                    <option value="{{ $pelicula->id }}">{{ $pelicula->titulo_distribucion }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    
                        <div>
                            <x-input-label for="funcion_id" :value="__('Seleccionar Función')" />
                            <x-select id="funcion_id" name="funcion_id" class="block mt-1 w-full" required>
                                <option value="" disabled selected>Seleccione una función</option>
                                @foreach($funciones as $funcion)
                                    <option value="{{ $funcion->id }}">{{ $funcion->dia_semana . ' ' . $funcion->hora_comienzo }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar Promoción') }}
                            </x-primary-button>
                        </div>
                    </form>
                    
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
