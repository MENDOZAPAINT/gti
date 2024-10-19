<div class="flex flex-wrap justify-center gap-4 sm:gap-6 w-full max-w-7xl">
    <!-- Tarjeta 1 -->
    @foreach ($actores as $actor)
        <div
            class="rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 flex-shrink-0 w-[calc(100%-16px)] sm:w-[calc(50%-12px)] lg:w-[calc(25%-18px)] bg-gradient-to-br from-blue-900 via-gray-900 to-black actor">

            <img src="/placeholder.svg?height=150&width=300" alt="Foto de Menoja" class="w-full h-40 object-cover">
            <div class="p-4 sm:p-5">
                <h2 class="text-lg font-semibold mb-2 text-white">Información Personal</h2>
                <ul class="text-sm text-gray-200 mb-4 space-y-1">
                    <li><strong>Nombre:</strong> {{$actor->nombre}}</li>
                    <li><strong>Nacionalidad:</strong> {{$actor->nacionalidad}}</li>
                    <li><strong>Cantidad de peliculas:</strong>{{$actor->cantidad_peliculas_actuadas}}</li>
                </ul>
                <button
                    class="w-full bg-white text-blue-600 py-2 px-4 rounded-md text-sm hover:bg-opacity-90 transition duration-300">Biografía
                    completa</button>
            </div>
        </div>
    @endforeach

</div>

<style>
    @media (max-width: 768px) {
        .actor {
            width: 70%;
        }
    }
</style>
