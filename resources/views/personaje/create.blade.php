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
                    Crear personajes

                    <form method="POST" action="{{ route('personajes.store') }}">
                        @csrf
                    
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre del personaje')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus autocomplete="nombre" />
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
                            <x-input-label for="actor_id" :value="__('Seleccionar Actor')" />
                            <x-select id="actor_id" name="actor_id" class="block mt-1 w-full" required>
                                <option value="" disabled selected>Seleccione un actor</option>
                                @foreach($actores as $actor)
                                    <option value="{{ $actor->id }}">{{ $actor->nombre }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar Personaje') }}
                            </x-primary-button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
