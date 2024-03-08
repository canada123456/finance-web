@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'h-[60px] inline-flex items-center justify-center px-auto pt-1 border-b-4 border-transparent text-white text-md font-bold leading-5 focus:outline-none focus:text-white transition duration-150 ease-in-out'
                : 'h-[60px] inline-flex items-center justify-center px-auto pt-1 hover:-translate-y-1 hover:scale-105 border-b border-transparent hover:border-b-transparent text-md font-medium leading-5 text-gray-300 hover:text-white hover:border-white focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
