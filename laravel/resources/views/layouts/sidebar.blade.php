@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-[#FF8833]'
                : 'transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->class(['flex items-center ml-10 p-1 pr-3 space-x-2 rounded hover:bg-[#FF8833] hover:text-white'])->merge(['class' => $classes]) }}>
    <span class="i-material-symbols-play-arrow-rounded"></span>
    <span class="">{{ $slot }}</span>
</a>