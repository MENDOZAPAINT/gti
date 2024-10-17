<!-- /resources/views/components/op.blade.php -->

@props([
    'name' => 'rating',
    'label' => 'Calificación:',
    'stars' => 5,
    'rating' => 0 // Valor de la calificación de la película (puede ser decimal)
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-start my-2']) }}>
    <span class="text-sm font-semibold text-blue-100 mr-2">{{ $label }}</span>
    <div class="flex">
        @for ($i = 1; $i <= $stars; $i++)
            <div class="relative inline-block">
                <span class="text-2xl text-gray-400">★</span>
                @if ($rating > $i - 1)
                    @php
                        $percent = min(($rating - $i + 1) * 100, 100);
                    @endphp
                    <span class="absolute top-0 left-0 text-2xl text-yellow-400 overflow-hidden" style="width: {{ $percent }}%;">★</span>
                @endif
            </div>
        @endfor
    </div>
    {{-- <span class="text-sm text-gray-300 mt-1">{{ $rating }} de {{ $stars }} estrellas</span> --}}
</div>

<style>
    .relative { position: relative; }
    .absolute { position: absolute; }
    .top-0 { top: 0; }
    .left-0 { left: 0; }
    .overflow-hidden { overflow: hidden; }
</style>