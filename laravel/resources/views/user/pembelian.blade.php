@extends('layouts.base')
 
@section('title', 'Pembelian | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Pembelian</h1>
<div x-data="{ current: 1 }">
  <div class="flex overflow-hidden border-b-2 mt-8">
    {{-- <button class="p-2 w-full" x-on:click="current = 1"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Semua</button> --}}
    <button class="p-2 w-full" x-on:click="current = 1"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Belum Bayar</button>
    <button class="p-2 w-full" x-on:click="current = 2"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 2 }">Diproses</button>
        <button class="p-2 w-full" x-on:click="current = 3"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 3 }">Dikirim</button>
    <button class="p-2 w-full" x-on:click="current = 4"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 4 }">Selesai</button>
    <button class="p-2 w-full" x-on:click="current = 5"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 5 }">Dibatalkan</button>    
  </div>
  <div x-show="current === 1" class="py-3 mt-4">
    <div class="shop-2">
      <div class="flex space-x-4 items-center">
        <span class="i-solar-shop-2-linear w-6 h-6"></span>
        <h1 class="font-semibold">Peduli Sampah</h1>
    </div>
      <div class="produk-3">
        <div class="flex flex-wrap justify-between mt-4">
            <div class="flex space-x-6">
                <img src="{{ asset('img/marketplace/produk-1.png') }}" class="rounded-xl w-48 h-32">
                <div class="flex-rows">
                    <h1>Sampah Plastik Aqua Gelas 2 Kg</h1>
                    <h2>Jumlah : 2 Kg</h2>
                </div>
            </div>
            <div class="flex space-x-2 mt-auto">
              <h3 class="text-right">Harga : </h3>
              <h4 class="text-[#FF8833]">Rp 3.000,-</h4>
            </div>
        </div>
        <div class="flex justify-end space-x-6 mt-4 items-center">
          <div class="flex space-x-2"> 
            <h3 class="text-right font-semibold">Total Pesanan : </h3>
            <h4 class="text-[#FF8833] font-medium">Rp 3.000,-</h4>
          </div>
          <button class="items-center py-2 px-4 bg-[#8092C1] text-neutral-50 rounded-lg">Bayar Sekarang</button>
        </div>
      </div>
    </div>

  </div>
  <div x-show="current === 2" class="py-3 mt-4">
    <img src="{{ asset('img/marketplace/clipboard.png') }}" class="w-32 mx-auto mt-4">
    <h1 class="mt-4 text-center">Belum ada pesanan</h1>
  </div>
  <div x-show="current === 3" class="py-3 mt-4">
    <img src="{{ asset('img/marketplace/clipboard.png') }}" class="w-32 mx-auto mt-4">
    <h1 class="mt-4 text-center">Belum ada pesanan</h1>
  </div>
  <div x-show="current === 4" class="py-3 mt-4">
    <div class="shop-1">
      <div class="flex space-x-4 items-center">
          <span class="i-solar-shop-2-linear w-6 h-6"></span>
          <h1 class="font-semibold">Anti Sampah</h1>
      </div>
      <div class="produk-1">
        <div class="flex flex-wrap justify-between mt-4">
            <div class="flex space-x-6">
                <img src="{{ asset('img/marketplace/produk-2.png') }}" class="rounded-xl w-48 h-32">
                <div class="flex-rows">
                    <h1>Kertas Koran Bekas Murah Untuk Kerjainan Tangan</h1>
                    <h2>Jumlah : 2 Kg</h2>
                </div>
            </div><div class="flex space-x-2 mt-auto">
              <h3 class="text-right">Harga : </h3>
              <h4 class="text-[#FF8833]">Rp 10.000,-</h4>
            </div>
        </div>
      </div>
      <div class="produk-2">
        <div class="flex flex-wrap justify-between mt-4">
            <div class="flex space-x-6">
                <img src="{{ asset('img/marketplace/produk-4.png') }}" class="rounded-xl w-48 h-32">
                <div class="flex-rows">
                    <h1>Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
                    <h2>Jumlah : 3 Kg</h2>
                </div>
            </div>
            <div class="flex space-x-2 mt-auto">
              <h3 class="text-right">Harga : </h3>
              <h4 class="text-[#FF8833]">Rp 6.000,-</h4>
            </div>
        </div>
        <div class="flex justify-end space-x-2 mt-4">
          <h3 class="text-right font-semibold">Total Pesanan : </h3>
          <h4 class="text-[#FF8833] font-medium">Rp 16.000,-</h4>
        </div>
      </div>
    </div>
    <div class="shop-2">
      <div class="flex space-x-4 items-center">
        <span class="i-solar-shop-2-linear w-6 h-6"></span>
        <h1 class="font-semibold">Peduli Sampah</h1>
    </div>
      <div class="produk-3">
        <div class="flex flex-wrap justify-between mt-4">
            <div class="flex space-x-6">
                <img src="{{ asset('img/marketplace/produk-1.png') }}" class="rounded-xl w-48 h-32">
                <div class="flex-rows">
                    <h1>Sampah Plastik Aqua Gelas 2 Kg</h1>
                    <h2>Jumlah : 2 Kg</h2>
                </div>
            </div>
            <div class="flex space-x-2 mt-auto">
              <h3 class="text-right">Harga : </h3>
              <h4 class="text-[#FF8833]">Rp 3.000,-</h4>
            </div>
        </div>
        <div class="flex justify-end space-x-2 mt-4">
          <h3 class="text-right font-semibold">Total Pesanan : </h3>
          <h4 class="text-[#FF8833] font-medium">Rp 3.000,-</h4>
        </div>
      </div>
    </div>
  </div>
  <div x-show="current === 5" class="py-3 mt-4">
    <img src="{{ asset('img/marketplace/clipboard.png') }}" class="w-32 mx-auto mt-4">
    <h1 class="mt-4 text-center">Belum ada pesanan</h1>
  </div>
</div>
  
@endsection 