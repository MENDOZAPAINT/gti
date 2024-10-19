<x-modal name="confirm-reserva" focusable>
    <div x-data="{
        titulo: '',
        cine: '',
        sala: '',
        dia: '',
        hora: '',
        butacas: '',
        init() {
            $watch('$store.reserva', value => {
                this.titulo = value.titulo;
                this.cine = value.cine;
                this.sala = value.sala;
                this.dia = value.dia;
                this.hora = value.hora;
                this.butacas = value.butacas;
            })
        }
    }" x-init="init">
    <h1
    class="text-4xl font-bold text-center text-white bg-gradient-to-r from-blue-500 to-purple-600 p-6 rounded-lg shadow-lg">
    {{ $pelicula->titulo_distribucion }}
</h1>
        <form method="POST" action="{{ route('reservas.store') }}">
            @csrf
            <div class="p-7">
                <div>
                    <x-input-label for="titulo" :value="__('Título de la película')" />
                    <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" x-model="titulo" required readonly />
                </div>
    
                <div>
                    <x-input-label for="cine" :value="__('Cine')" />
                    <x-text-input id="cine" class="block mt-1 w-full" type="text" name="cine" x-model="cine" required readonly />
                </div>
    
                <div>
                    <x-input-label for="sala" :value="__('Sala')" />
                    <x-text-input id="sala" class="block mt-1 w-full" type="text" name="sala" x-model="sala" required readonly />
                </div>
    
                <div>
                    <x-input-label for="dia" :value="__('Día')" />
                    <x-text-input id="dia" class="block mt-1 w-full" type="text" name="dia" x-model="dia" required readonly />
                </div>
    
                <div>
                    <x-input-label for="hora" :value="__('Hora')" />
                    <x-text-input id="hora" class="block mt-1 w-full" type="text" name="hora" x-model="hora" required readonly />
                </div>
    
                <div>
                    <x-input-label for="butacas" :value="__('Butacas disponibles')" />
                    <x-text-input id="butacas" class="block mt-1 w-full" type="text" name="butacas" x-model="butacas" required readonly />
                </div>
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Reservar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-modal>