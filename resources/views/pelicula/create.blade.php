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
                    <form method="POST" action="{{ route('peliculas.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="">
                                <div>
                                    <x-input-label for="titulo_distribucion" :value="__('Título de la distribución')" />
                                    <x-text-input id="titulo_distribucion" class="block mt-1 w-full" type="text"
                                        name="titulo_distribucion" :value="old('titulo_distribucion')" required autofocus
                                        autocomplete="titulo_distribucion" />
                                </div>

                                <div>
                                    <x-input-label for="titulo_original" :value="__('Título original')" />
                                    <x-text-input id="titulo_original" class="block mt-1 w-full" type="text"
                                        name="titulo_original" :value="old('titulo_original')" required autofocus
                                        autocomplete="titulo_original" />
                                </div>

                                <div>
                                    <x-input-label for="genero" :value="__('Género de la película')" />
                                    <x-text-input id="genero" class="block mt-1 w-full" type="text" name="genero"
                                        :value="old('genero')" required autofocus autocomplete="genero" />
                                </div>

                                <div>
                                    <x-input-label for="idioma_original" :value="__('Idioma original')" />
                                    <x-text-input id="idioma_original" class="block mt-1 w-full" type="text"
                                        name="idioma_original" :value="old('idioma_original')" required autofocus
                                        autocomplete="idioma_original" />
                                </div>

                                <div>
                                    <x-input-label for="subtitulos_espanol" :value="__('¿Tiene subtítulos en español?')" />
                                    <x-select id="subtitulos_espanol" class="block mt-1 w-full"
                                        name="subtitulos_espanol" required>
                                        <option value="1" {{ old('subtitulos_espanol') == 1 ? 'selected' : '' }}>Sí
                                        </option>
                                        <option value="0" {{ old('subtitulos_espanol') == 0 ? 'selected' : '' }}>No
                                        </option>
                                    </x-select>
                                </div>

                                <div>
                                    <x-input-label for="paises_origen" :value="__('Países de origen')" />
                                    <x-text-input id="paises_origen" class="block mt-1 w-full" type="text"
                                        name="paises_origen" :value="old('paises_origen')" required autofocus
                                        autocomplete="paises_origen" />
                                </div>

                            </div>
                            <div class="">
                                <div>
                                    <x-input-label for="ano_produccion" :value="__('Año de producción')" />
                                    <x-text-input id="ano_produccion" class="block mt-1 w-full" type="number"
                                        name="ano_produccion" :value="old('ano_produccion')" required autofocus
                                        autocomplete="ano_produccion" min="1900" max="{{ date('Y') }}" />
                                </div>
                                <div>
                                    <x-input-label for="url_sitio_web" :value="__('URL del sitio web de la película')" />
                                    <x-text-input id="url_sitio_web" class="block mt-1 w-full" type="url"
                                        name="url_sitio_web" :value="old('url_sitio_web')" required autofocus
                                        autocomplete="url_sitio_web" />
                                </div>

                                <div>
                                    <x-input-label for="duracion" :value="__('Duración en minutos')" />
                                    <x-text-input id="duracion" class="block mt-1 w-full" type="number"
                                        name="duracion" :value="old('duracion')" required autofocus autocomplete="duracion" />
                                </div>

                                <div>
                                    <x-input-label for="calificacion" :value="__('Calificación de la película')" />
                                    <x-select id="calificacion" class="block mt-1 w-full" name="calificacion" required>
                                        <option value="Apta para todo público"
                                            {{ old('calificacion') == 'Apta para todo público' ? 'selected' : '' }}>Apta
                                            para
                                            todo público</option>
                                        <option value="+9 años"
                                            {{ old('calificacion') == '+9 años' ? 'selected' : '' }}>+9 años
                                        </option>
                                        <option value="+15 años"
                                            {{ old('calificacion') == '+15 años' ? 'selected' : '' }}>+15
                                            años</option>
                                        <option value="+18 años"
                                            {{ old('calificacion') == '+18 años' ? 'selected' : '' }}>+18
                                            años</option>
                                    </x-select>
                                </div>

                                <div>
                                    <x-input-label for="fecha_estreno_santiago" :value="__('Fecha de estreno en Santiago')" />
                                    <x-text-input id="fecha_estreno_santiago" class="block mt-1 w-full" type="date"
                                        name="fecha_estreno_santiago" :value="old('fecha_estreno_santiago')" required autofocus
                                        autocomplete="fecha_estreno_santiago" />
                                </div>

                                <div>
                                    <x-input-label for="resumen" :value="__('Resumen de la película')" />
                                    <x-textarea id="resumen" class="block mt-1 w-full" name="resumen" required
                                        autofocus>
                                        {{ old('resumen') }}
                                    </x-textarea>
                                </div>
                            </div>
                        </div>



                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Registrar') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
