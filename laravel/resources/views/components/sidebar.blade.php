@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-[#FF8833]'
                : 'transition duration-150 ease-in-out';
    $classArrow = ($active ?? false)
                ? 'i-material-symbols-play-arrow-rounded'
                : 'w-[16px] h-[16px]';
@endphp

<a {{ $attributes->class(['items-center ml-10 p-1 pr-3 space-x-2 rounded hover:bg-[#FF8833] hover:text-white hidden md:flex'])->merge(['class' => $classes]) }}>
    <span {{$attributes->class([$classArrow])}}></span>
    <span class="">{{ $slot }}</span>
</a> 