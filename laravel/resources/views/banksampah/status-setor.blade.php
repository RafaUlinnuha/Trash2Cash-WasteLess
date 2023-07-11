@extends('layouts.base')
 
@section('title', 'Status Penyetoran | ')
 
@section('content')
<h1 class="text-xl lg:text-2xl font-semibold text-center md:text-left">Status Penyetoran</h1>
<div x-data="{ current: 1 }">
  <div class="flex overflow-x-auto border-b-2 mt-8 text-xs md:text-base">
    <button class="p-2 w-full" x-on:click="current = 1"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Semua</button>
    <button class="p-2 w-full whitespace-nowrap" x-on:click="current = 2"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 2 }">Sedang Berjalan</button>
    <button class="p-2 w-full" x-on:click="current = 3"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 3 }">Selesai</button>  
  </div>
  @include('banksampah.tab-status.tab-1')
  @include('banksampah.tab-status.tab-2')
  @include('banksampah.tab-status.tab-3')
</div>
  
@endsection 