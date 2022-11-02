@props(['active'])

@php
$classes = $active ?? false ? 'block px-4 py-2 rounded text-jindigo hover-carmine' : 'block px-4 py-2 rounded text-jindigo hover-carmine';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
