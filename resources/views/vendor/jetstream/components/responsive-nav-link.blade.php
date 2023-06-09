@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-yellow-600 text-base font-medium text-yellow-800 bg-yellow-50 focus:outline-none focus:text-yellow-900 focus:bg-yellow-100 focus:border-yellow-800 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-yellow-600 hover:text-yellow-900 hover:bg-yellow-50 hover:border-yellow-300 focus:outline-none focus:text-yellow-900 focus:bg-yellow-50 focus:border-yellow-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
