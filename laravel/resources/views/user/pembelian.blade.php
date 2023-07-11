@extends('layouts.base')
 
@section('title', 'Pembelian | ')
 
@section('content')
<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Status Pembelian</h1>
<div x-data="{ current: 1 }">
  <div class="flex overflow-x-auto border-b-2 mt-8 text-xs md:text-base">
    <button class="p-2 w-full" x-on:click="current = 1"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Semua</button>
    <button class="p-2 w-full whitespace-nowrap" x-on:click="current = 2"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 2 }">Belum Bayar</button>
    <button class="p-2 w-full" x-on:click="current = 3"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 3 }">Diproses</button>
        <button class="p-2 w-full" x-on:click="current = 4"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 4 }">Dikirim</button>
    <button class="p-2 w-full" x-on:click="current = 5"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 5 }">Selesai</button>
    <button class="p-2 w-full" x-on:click="current = 6"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 6 }">Dibatalkan</button>    
  </div>
  @include('user.tab-pembelian.tab-1')
  @include('user.tab-pembelian.tab-2')
  @include('user.tab-pembelian.tab-3')
  @include('user.tab-pembelian.tab-4')
  @include('user.tab-pembelian.tab-5')
  @include('user.tab-pembelian.tab-6')
</div>
  
@endsection 