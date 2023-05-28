@extends('layouts.base')
 
@section('title', 'Status Order | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Status Order</h1> 
<div class="w-full">
    <div x-data="{ current: 1 }">
      <div class="flex overflow-hidden border-b-2 mt-8">
        <button class="p-2 w-full" x-on:click="current = 1"
            x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Semua</button>
        <button class="p-2 w-full" x-on:click="current = 2"
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
      @include('toko.tab.tab-1')
      @include('toko.tab.tab-2')
      @include('toko.tab.tab-3')
      @include('toko.tab.tab-4')
      @include('toko.tab.tab-5')
      @include('toko.tab.tab-6')
    </div>
</div>

@endsection 