@extends('layouts.base')
 
@section('title', 'Marketplace | ')
 
@section('content')
    <div class="kategori">
        <h1 class="text-4xl font-semibold">Kategori</h1>
        <div class="grid grid-cols-4 gap-8 mt-4">
            <div class="plastik">
                <a href="{{ route('kategori-plastik') }}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-neutral-50 tracking-wide">Plastik</h1>
                </a>
            </div>
            <div class="kaca-kaleng">
                <a href="{{ route('kategori-kaca-kaleng') }}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-white tracking-wide">Kaca dan Kaleng</h1>
                </a>
            </div>
            <div class="elektronik">
                <a href="{{ route('kategori-elektronik') }}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-white tracking-wide">Elektronik</h1>
                </a>
            </div>
            <div class="kertas">
                <a href="{{ route('kategori-kertas') }}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-white tracking-wide">Kertas</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="produk">
        <div class="judul-produk flex flex-wrap mt-16 items-end justify-between">
            <h1 class="text-4xl font-semibold">Produk</h1>
            <a href="{{ route('semua-kategori') }}" class="hover:underline">See All</a>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mt-4">
            <a href="" class="produk-1">
                <div class="items-center bg-white border border-gray-200 transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/marketplace/produk-1.png') }}" class="w-full">
                    <h1 class="m-2 text-lg">Sampah Plastik Aqua Gelas 2 Kg</h1>
                    <h2 class="mx-2 my-4 text-[#FF8833]">Rp 3.000</h2>
                    <h3 class="m-2 text-right">Kec. Padalarang</h3>
                </div>
            </a>
            <a href="" class="produk-2">
                <div class="items-center bg-white border border-gray-200 transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/marketplace/produk-2.png') }}" class="w-full">
                    <h1 class="m-2 text-lg line-clamp-2">Kertas Koran Bekas Murah Meriah Untuk Kerajinan Tangan</h1>
                    <h2 class="mx-2 my-4 text-[#FF8833]">Rp 5.000</h2>
                    <h3 class="m-2 text-right">Kota Bandung</h3>
                </div>
            </a>
            <a href="" class="produk-3">
                <div class="items-center bg-white border border-gray-200 transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/marketplace/produk-3.png') }}" class="w-full">
                    <h1 class="m-2 text-lg">Barang Elektronik Rumahan Bekas 4 Kg</h1>
                    <h2 class="mx-2 my-4 text-[#FF8833]">Rp 40.000</h2>
                    <h3 class="m-2 text-right">Kec. Jatinangor</h3>
                </div>
            </a>
            <a href="" class="produk-4">
                <div class="items-center bg-white border border-gray-200 transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/marketplace/produk-4.png') }}" class="w-full">
                    <h1 class="m-2 text-lg">Sampah Plastik Botol Aqua Bersih 3 Kg</h1>
                    <h2 class="mx-2 my-4 text-[#FF8833]">Rp 6.000</h2>
                    <h3 class="m-2 text-right">Kota Bandung</h3>
                </div>
            </a>
        </div>
    </div>
@endsection