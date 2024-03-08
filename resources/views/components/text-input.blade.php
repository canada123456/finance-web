@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-dark border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-200 dark:focus:border-gray-400 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm']) !!}>
