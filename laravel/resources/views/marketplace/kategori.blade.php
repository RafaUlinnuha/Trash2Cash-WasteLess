@extends('layouts')
 
@section('title', 'Kategori | ')
 
@section('content')
   <aside class="fixed bg-white">
      <div class="flex flex-col">
         <a href="#" class="flex items-center space-x-4 p-2 text-black">
            <span class="i-ion-options w-8 h-8"></span>
            <span class="font-bold text-lg">Semua Kategori</span>
         </a>
         <a href="#" class="flex items-center space-x-4 p-2 text-black">
            <span class="i-ion-options w-8 h-8 hidden"></span>
            <span class="text-lg">Plastik</span>
         </a>
         <a href="#" class="flex items-center space-x-4 p-2 text-black">
            <span class="i-ion-options w-8 h-8 hidden"></span>
            <span class="text-lg">Kaca dan Kaleng</span>
         </a>
         <a href="#" class="flex items-center space-x-4 p-2 text-black">
            <span class="i-ion-options w-8 h-8 hidden"></span>
            <span class="text-lg">Elektronik</span>
         </a>
         <a href="#" class="flex items-center space-x-4 p-2 text-black">
            <span class="i-ion-options w-8 h-8 hidden"></span>
            <span class="text-lg">Kertas</span>
         </a>
      </div>
   </aside>
   <div class="ml-96">
      <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
         <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200">
                <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
                <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
                <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
                <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
        </a>
        <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200">
               <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
               <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
               <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
               <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
         </a>
         <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200 transition">
               <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
               <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
               <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
               <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
         </a>
         <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200">
                <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
                <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
                <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
                <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
        </a>
        <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200">
               <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
               <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
               <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
               <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
         </a>
         <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200 transition">
               <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
               <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
               <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
               <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
         </a>
         <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200 transition">
               <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
               <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
               <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
               <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
         </a>
         <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200">
                <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
                <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
                <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
                <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
        </a>
        <a href="" class="produk-4">
            <div class="items-center bg-white border border-gray-200">
               <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
               <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
               <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
               <h3 class="m-2 text-right">Kota Bandung</h3>
            </div>
         </a>
      </div>
   </div>

@endsection 