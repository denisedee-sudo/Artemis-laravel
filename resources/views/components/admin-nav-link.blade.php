@props(['active'])

@php
$classes = $active ?? false ? 'block px-4 py-2 rounded text-bubbles hover-carmine' : 'block px-4 py-2 rounded text-bubbles hover-carmine';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
