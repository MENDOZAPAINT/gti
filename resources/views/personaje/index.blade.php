<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-6">
            <h2
                class="text-3xl font-bold text-white bg-gradient-to-r from-purple-700 via-indigo-800 to-blue-700 bg-clip-text text-transparent">
                {{ __('LISTA DE PERSONAJES') }}
            </h2>

            <x-link :href="route('personajes.create')" :active="request()->routeIs('personajes.create')"
                class="bg-purple-700 hover:bg-purple-800 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">
                {{ __('Agregar Personaje') }}
            </x-link>
        </div>

    </x-slot>

    <div class="py-6">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    @include('personaje.lista')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
