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
                    Crear peliculas
                    <form method="POST" action="{{ route('salas.store') }}">
                        @csrf
                    
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre de la sala')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus autocomplete="nombre" />
                        </div>
                    
                        <div>
                            <x-input-label for="numero_identificador" :value="__('Número identificador')" />
                            <x-text-input id="numero_identificador" class="block mt-1 w-full" type="number" name="numero_identificador"
                                :value="old('numero_identificador')" required autofocus autocomplete="numero_identificador" />
                        </div>
                    
                        <div>
                            <x-input-label for="cantidad_butacas" :value="__('Cantidad de butacas')" />
                            <x-text-input id="cantidad_butacas" class="block mt-1 w-full" type="number" name="cantidad_butacas"
                                :value="old('cantidad_butacas')" required autofocus autocomplete="cantidad_butacas" min="1" />
                        </div>
                    
                        <div>
                            <x-input-label for="cine_id" :value="__('Seleccionar Cine')" />
                            <x-select id="cine_id" name="cine_id" class="block mt-1 w-full" required>
                                <option value="" disabled selected>Seleccione un cine</option>
                                @foreach($cines as $cine)
                                    <option value="{{ $cine->id }}">{{ $cine->nombre }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar Sala') }}
                            </x-primary-button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
