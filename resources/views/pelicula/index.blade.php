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
                    <x-link :href="route('peliculas.create')" :active="request()->routeIs('peliculas.create')">
                        {{ __('Agregar Peliculas') }}
                    </x-link>
                    <div class="max-w-full mx-auto my-3">
                        <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-xl shadow-2xl">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-gradient-to-r from-purple-900 to-indigo-900 text-white">
                                        <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">
                                            Titulo
                                        </th>
                                        <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">
                                            Genero
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peliculas as $pelicula)
                                        <tr
                                            class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 fade-in">
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 dark:text-gray-300">
                                                {{ $pelicula->titulo_distribucion }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 dark:text-gray-300">
                                                {{ $pelicula->genero }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }
</style>
