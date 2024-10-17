<!-- /resources/views/components/star-rating.blade.php -->

@props([
    'name' => 'rating',
    'label' => 'Calificación:',
    'stars' => 5,
    'initialRating' => 0,
])

<div x-data="{ rating: {{ $initialRating }} }" {{ $attributes->merge(['class' => 'flex flex-col items-start my-2']) }}>
    <span class="text-sm font-semibold text-blue-100 mr-2">{{ $label }}</span>
    <div class="flex">
        @for ($i = 1; $i <= $stars; $i++)
            <div>
                <input type="radio" :value="{{ $i }}" x-model="rating"
                    id="{{ $name }}-star-{{ $i }}" name="{{ $name }}-visual" class="hidden">
                <label for="{{ $name }}-star-{{ $i }}" class="cursor-pointer text-2xl"
                    :class="rating >= {{ $i }} ? 'text-yellow-400' : 'text-gray-400'"
                    @click="rating = {{ $i }}">
                    ★
                </label>
            </div>
        @endfor
    </div>

    <!-- Select oculto para guardar el valor -->
    <select id="{{ $name }}" name="{{ $name }}" x-model="rating" class="hidden">
        <option value="" disabled>Seleccione una calificación</option>
        @for ($i = 1; $i <= $stars; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
{{-- 
    <!-- Mostrar la calificación seleccionada -->
    <div x-show="rating > 0" class="mt-2 text-white">
        <span class="font-bold">Calificación Seleccionada: </span>
        <span x-text="rating" class="text-yellow-400"></span>
    </div> --}}
</div>
