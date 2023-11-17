@props(['active'])

@php

$classes = ($active ?? false)
            ? 'block align-middle cursor-pointer button-menu-left-activo text-teal-500 text-base rounded-lg p-0 font-light md:text-center py-2 my-1 w-96 md:w-auto text-center'
            : 'block align-middle cursor-pointer button-menu-left-default text-menu-left p-0 py-2 text-base rounded-lg cursor-pointer font-light text-left md:text-center py-2 my-1 w-96 md:w-auto';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
