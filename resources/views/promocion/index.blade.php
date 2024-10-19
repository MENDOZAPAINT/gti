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
                    <x-link :href="route('promociones.create')" :active="request()->routeIs('promociones.create')">
                        {{ __('Promociones') }}
                    </x-link>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-brak border border-gray-600">
                            <thead>
                                <tr class="bg-gray-700">
                                    <th class="py-2 px-4 border-b">Promocion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promociones as $promocion)
                                    <tr class="">
                                        <td class="py-2 px-4 border-b">{{$promocion->descripcion}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
