@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-[#FF8833] text-white'
                : 'transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->class(['flex items-center py-2 px-6 font-medium rounded hover:bg-[#FF8833] hover:text-white'])->merge(['class' => $classes]) }}>
    <span class="">{{ $slot }}</span>
</a> 