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
                    <form method="POST" action="{{ route('funciones.store') }}">
                        @csrf
                    
                        <div>
                            <x-input-label for="dia_semana" :value="__('Día de la semana')" />
                            <x-select id="dia_semana" name="dia_semana" class="block mt-1 w-full" required>
                                <option value="" disabled selected>Seleccione un día</option>
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miércoles">Miércoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                                <option value="Sábado">Sábado</option>
                                <option value="Domingo">Domingo</option>
                            </x-select>
                        </div>
                    
                        <div>
                            <x-input-label for="hora_comienzo" :value="__('Hora de comienzo')" />
                            <x-text-input id="hora_comienzo" class="block mt-1 w-full" type="time" name="hora_comienzo"
                                :value="old('hora_comienzo')" required autofocus autocomplete="hora_comienzo" />
                        </div>
                    
                        <div>
                            <x-input-label for="sala_id" :value="__('Seleccionar Sala')" />
                            <x-select id="sala_id" name="sala_id" class="block mt-1 w-full" required>
                                <option value="" disabled selected>Seleccione una sala</option>
                                @foreach($salas as $sala)
                                    <option value="{{ $sala->id }}">{{ $sala->nombre }}</option>
                                @endforeach
                            </x-select>
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
                    
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar Función') }}
                            </x-primary-button>
                        </div>
                    </form>
                    
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
