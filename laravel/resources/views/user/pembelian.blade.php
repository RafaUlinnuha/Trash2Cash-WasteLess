@extends('layouts.base')
 
@section('title', 'Pembelian | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Pembelian</h1>
<div x-data="{ current: 1 }">
  <div class="flex overflow-hidden border-b-2 mt-8">
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
          
<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-[#8092C1] hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
  Bayar Sekarang
</button>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Upload Bukti Bayar</h3>
              <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                        <p class="text-xs text-gray-500">PNG atau JPG</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
              </div> 
              <button type="submit" class="mt-4 w-full text-white bg-[#8092C1] hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
            </div>
        </div>
    </div>
</div> 

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