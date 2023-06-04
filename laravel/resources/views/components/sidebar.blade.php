@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-[#FF8833]'
                : 'transition duration-150 ease-in-out';
    $classArrow = ($active ?? false)
                ? 'i-material-symbols-play-arrow-rounded'
                : 'w-[16px] h-[16px]';
@endphp

<a {{ $attributes->class(['flex text-sm md:text-base items-center p-1.5 md:ml-10 md:p-1 md:pr-3 space-x-2 rounded hover:bg-[#FF8833] hover:text-white'])->merge(['class' => $classes]) }}>
    <span {{$attributes->class([$classArrow])}}></span>
    <span class="">{{ $slot }}</span>
</a> 