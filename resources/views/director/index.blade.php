<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-1">
            <h2
                class="text-3xl font-bold text-white bg-gradient-to-r from-purple-700 via-indigo-800 to-blue-700 bg-clip-text text-transparent">
                {{ __('LISTA DE DIRECTORES') }}
            </h2>
            <x-link :href="route('directores.create')" :active="request()->routeIs('directores.create')">
                {{ __('Agregar Directores') }}
            </x-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 text-gray-900 dark:text-gray-100 py-4">
                    @include('director.lista')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
