@extends('layouts.base')
 
@section('title', 'Admin | ')
 
@section('content')
<div class="grid grid-cols-1 p-4">
    <h1 class="text-xl md:text-3xl">
    Daftar Order
    </h1>        
</div>
<div x-data="{ current: 1 }">
  <div class="flex overflow-x-auto border-b-2 my-8 text-xs md:text-base">
    <button class="p-2 w-full" x-on:click="current = 1"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Semua</button>
    <button class="p-2 w-full whitespace-nowrap" x-on:click="current = 2"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 2 }">Belum Bayar</button>
    <button class="p-2 w-full" x-on:click="current = 3"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 3 }">Sudah Bayar</button>  
    <button class="p-2 w-full" x-on:click="current = 4"
    x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 4 }">Batal</button>  
  </div>
  @include('admin.tab.tab-1')
  @include('admin.tab.tab-2')
  @include('admin.tab.tab-3')
  @include('admin.tab.tab-4')

</div>
@endsection 
