@extends('layouts.base')
 
@section('title', 'Detail Produk | ')
 
@section('content')
    <h1 class="text-4xl font-semibold">Kertas Koran Bekas Murah Meriah Untuk Kerajinan Tangan</h1>
    <div class="flex space-x-16 mt-8">
        <div class="flex flex-col w-full space-y-4">
            <img src="{{ asset('img/marketplace/produk-2.png') }}">
            <div class="foto flex space-x-4">
                <span class="i-bi-people-circle w-12 h-12"></span>
                <div class="grid grid-rows-2">
                    <h1 class="font-semibold">Nama Toko</h1>
                    <h2>Kota Bandung</h2>
                </div>
            </div>
        </div>
        <div class="deskripsi">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos accusamus fugit deserunt nam rerum soluta quo molestias laudantium, possimus eius minima unde! Quo illo architecto sed facilis ad natus minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ea maxime accusantium esse cum rerum quis quod repudiandae tempore quaerat, natus, molestiae quos sit laborum? Consectetur veniam officiis voluptatem! Expedita?</p>
            <div class="grid grid-cols-4 mt-4">
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-mdi-recycle w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kategori</div>
                        <p class="font-semibold">Kertas</p>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-carbon-category w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Sub Kategori</div>
                        <p class="font-semibold">Kertas Koran</p>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-ri-price-tag-3-line w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Harga</div>
                        <p class="font-semibold">Rp 5000/kg</p>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-material-symbols-weight-outline w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kuantitas</div>
                        <p class="font-semibold">100 Kg</p>
                    </div>
                </div>
            </div>
            <div class="jumlah flex items-center mt-10 space-x-4">
                <h1>Jumlah</h1>
                <div class="border border-gray-200 rounded">
                    <div class="flex flex-row h-8 w-24 bg-transparent">
                        <button data-action="decrement" class="bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-l cursor-pointer">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number" class="text-center w-full font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah" value="0">
                        <button data-action="increment" class="bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <button class="items-center py-2 px-8 bg-[#FF8833] text-neutral-50 rounded-lg">Beli Sekarang</button>
                <button class="items-center py-2 px-8 border border-[#FF8833] text-[#FF8833] rounded-lg">Keranjang</button>
            </div>
        </div>
    </div>
@endsection 