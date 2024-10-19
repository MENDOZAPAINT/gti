<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pelicula') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 text-gray-900 dark:text-gray-100">
                    <x-link :href="route('salas.create')" :active="request()->routeIs('salas.create')">
                        {{ __('Salas') }}
                    </x-link>

                    <x-content-card class="lg:grid-cols-3">
                        @foreach ($salas as $sala)
                            <div
                                class="bg-gradient-to-r from-gray-800 to-gray-900 dark:from-gray-900 dark:to-black text-white p-4 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                                <h3 class="text-lg font-semibold mb-1">{{ $sala->cine->nombre }}</h3>
                                <h3 class="text-lg font-semibold mb-1">{{ $sala->nombre }}</h3>

                                <p class="text-sm text-blue-400 font-semibold flex items-center space-x-2">
                                    <span>Cantidad de butacas:</span>
                                    <span class="text-white">{{ $sala->cantidad_butacas }}</span>
                                </p>
                                <p class="text-sm">{{ $sala->telefono }}</p>
                                <x-link :href="route('salas.create', ['sala_id' => $sala->id])" :active="request()->routeIs('salas.create')">
                                    {{ __('Ver salas') }}
                                </x-link>
                            </div>
                        @endforeach
                    </x-content-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
