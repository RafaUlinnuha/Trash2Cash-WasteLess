@extends('layouts.base')
 
@section('title', 'Detail Produk | ')
 
@section('content')
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