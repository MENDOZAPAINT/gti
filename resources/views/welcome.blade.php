<x-app-welcome>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-1">
            <h2
                class="text-3xl font-bold text-white bg-gradient-to-r from-purple-700 via-indigo-800 to-blue-700 bg-clip-text text-transparent">
                {{ __('PELICULAS') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <div class="flex justify-between items-center mb-1">
                        <h2
                            class="text-3xl font-bold text-white bg-gradient-to-r from-purple-700 via-indigo-800 to-blue-700 bg-clip-text text-transparent">
                            {{ __('Peliculas recientes') }}
                        </h2>
                    </div>


                    @include('reciente')
                    <div class="flex justify-between items-center mb-1">
                        <h2
                            class="text-3xl font-bold text-white bg-gradient-to-r from-purple-700 via-indigo-800 to-blue-700 bg-clip-text text-transparent">
                            {{ __('Todas las peliculas') }}
                        </h2>
                    </div>
                    @include('lista')

                </div>
            </div>
        </div>
    </div>
</x-app-welcome>
