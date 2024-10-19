@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 dark:from-indigo-800 dark:via-purple-700 dark:to-pink-600 text-white text-sm font-medium leading-5 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 hover:from-indigo-500 hover:via-purple-500 hover:to-pink-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50'
    : 'inline-flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 bg-gradient-to-r from-gray-100 via-gray-200 to-gray-300 dark:from-gray-800 dark:via-gray-700 dark:to-gray-600 rounded-lg transition duration-300 ease-in-out transform hover:from-gray-200 hover:via-gray-300 hover:to-gray-400 dark:hover:from-gray-700 dark:hover:via-gray-600 dark:hover:to-gray-500 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 my-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>