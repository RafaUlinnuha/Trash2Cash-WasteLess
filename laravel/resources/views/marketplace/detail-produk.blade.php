@extends('layouts.base')
 
@section('title', 'Detail Produk | ')
 
@section('content')
    <nav class="flex flex-wrap pb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="{{route('home-page')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Marketplace
            </a>
        </li>
        <li>
            <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$produk->kategoriSampah->nama}}</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400 line-clamp-1">{{$produk->nama}}</span>
            </div>
        </li>
        </ol>
    </nav>
  
    <h1 class="text-xl md:text-3xl lg:text-4xl font-semibold">{{$produk->nama}}</h1>
    <div class="grid md:grid-cols-3 mt-4 md:mt-8">
        <div class="flex flex-col w-full space-y-4 col-span-3 md:col-span-1">
            <img src="{{asset('storage/'.$produk->gambar)}}" class="w-full md:w-[80%]">
            <div class="foto flex space-x-4">
                <span class="i-bi-people-circle w-12 h-12"></span>
                <div class="grid grid-rows-2">
                    <h1 class="font-semibold text-sm md:text-base">{{$produk->user->nama}}</h1>
                    <h2 class="text-sm md:text-base">{{$produk->user->alamatUser->kota}}</h2>
                </div>
            </div>
        </div>
        <div class="deskripsi col-span-2">
            <p class="mt-6 md:mt-0 text-sm md:text-base">{{$produk->deskripsi}}</p>
            <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-4 mt-4 text-sm md:text-base">
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-mdi-recycle w-6 h-6 md:w-8 md:h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kategori</div>
                        <p class="font-semibold line-clamp-1">{{$produk->kategoriSampah->nama}}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-carbon-category w-6 h-6 md:w-8 md:h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Sub Kategori</div>
                        <!-- <p class="font-semibold">Kertas Koran</p> -->
                        <p class="font-semibold line-clamp-1">{{$produk->nama_sub_kategori}}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-ri-price-tag-3-line w-6 h-6 md:w-8 md:h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Harga</div>
                        <!-- <p class="font-semibold">Rp 5000/kg</p> -->
                        <p class="font-semibold line-clamp-1">Rp {{number_format($produk->harga,2,',','.')}}/kg</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-material-symbols-weight-outline w-6 h-6 md:w-8 md:h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kuantitas</div>
                        <!-- <p class="font-semibold">100 Kg</p> -->
                        <p class="font-semibold line-clamp-1">{{$produk->jumlah}} Kg</p>
                    </div>
                </div>
            </div>
            <form method="post" action="{{route('keranjang.post', ['id' => $produk->id])}}">
            @csrf    
            <div class="grid grid-cols-2">
                <div class="jumlah flex items-center mt-10 justify-between col-span-2 w-full md:w-[70%]  xl:w-[40%]">
                    <h1 class="text-sm md:text-base">Jumlah</h1>
                    <div class="border">
                        <div x-data="{ counter: 1 }">
                            <div class="flex items-center justify-between">
                                <input type="button" value="-"  class="bg-white p-1 md:px-2 cursor-pointer border-r md:py-1 text-sm md:text-base" data-field="quantity" x-on:click="counter--;if(counter < 1){counter = 1;}">
                                <input type="number" name="jumlah" class="md:w-[80%] w-18 text-center py-0 border-transparent focus:border-transparent focus:ring-0 text-sm md:text-base" required min="1" max="{{$produk->jumlah}}" :value="counter">
                                <input type="button" value="+"  class="bg-white p-1 md:px-2 cursor-pointer border-l md:py-1 text-sm md:text-bas" data-field="quantity" x-on:click="counter++;if(counter > {{$produk->jumlah}}){counter = {{$produk->jumlah}};}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-sm md:text-base flex justify-between col-span-2 w-full md:w-[70%] xl:w-[40%]">
                    <button type="submit" name="action" value="beli_skrg" class="items-center py-2 px-5 md:px-6 bg-[#FF8833] text-neutral-50 rounded-lg">Beli Sekarang</button>
                    <button type="submit" name="action" value="tambah_keranjang" class="items-center py-2 px-5 md:px-6 border border-[#FF8833] text-[#FF8833] rounded-lg">Keranjang</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection 