@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 py-2 bg-indigo-600 dark:bg-indigo-700 text-white text-sm font-medium leading-5 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500'
            : 'inline-flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 bg-transparent border border-gray-300 dark:border-gray-600 rounded-lg transition duration-300 ease-in-out transform hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 my-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
