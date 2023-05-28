@extends('layouts.base')
 
@section('title', 'Detail Produk | ')
 
@section('content')
    <h1 class="text-4xl font-semibold">{{$produk->nama}}</h1>
    <div class="grid grid-cols-3 mt-8">
        <div class="flex flex-col w-full space-y-4 justify-center">
            <img src="{{asset('storage/'.$produk->gambar)}}" class="w-[80%]">
            <div class="foto flex space-x-4">
                <span class="i-bi-people-circle w-12 h-12"></span>
                <div class="grid grid-rows-2">
                    <h1 class="font-semibold">{{$produk->user->nama}}</h1>
                    <h2>{{$produk->user->alamatUser->kota}}</h2>
                </div>
            </div>
        </div>
        <div class="deskripsi col-span-2">
            <p>{{$produk->deskripsi}}</p>
            <div class="grid xl:grid-cols-4 grid-cols-2 gap-4 mt-4">
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-mdi-recycle w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kategori</div>
                        <p class="font-semibold line-clamp-1">{{$produk->kategoriSampah->nama}}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-carbon-category w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Sub Kategori</div>
                        <!-- <p class="font-semibold">Kertas Koran</p> -->
                        <p class="font-semibold line-clamp-1">{{$produk->nama_sub_kategori}}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-ri-price-tag-3-line w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Harga</div>
                        <!-- <p class="font-semibold">Rp 5000/kg</p> -->
                        <p class="font-semibold line-clamp-1">Rp {{number_format($produk->harga,2,',','.')}}/kg</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-material-symbols-weight-outline w-8 h-8"></span>
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
                    <h1>Jumlah</h1>
                    <div class="border">
                        <div x-data="{ counter: 1 }">
                            <div class="flex items-center justify-between">
                                <input type="button" value="-"  class="bg-white px-2 cursor-pointer border-r py-1" data-field="quantity" x-on:click="counter--;if(counter < 1){counter = 1;}">
                                <input type="number" name="jumlah" class="w-[50%] text-center py-0 border-transparent focus:border-transparent focus:ring-0" required min="1" max="{{$produk->jumlah}}" :value="counter">
                                <input type="button" value="+"  class="bg-white px-2 cursor-pointer border-l py-1" data-field="quantity" x-on:click="counter++;if(counter > {{$produk->jumlah}}){counter = {{$produk->jumlah}};}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-between col-span-2 w-full md:w-[70%] xl:w-[40%]">
                    <button type="submit" name="action" value="beli_skrg" class="items-center py-2 px-6 bg-[#FF8833] text-neutral-50 rounded-lg">Beli Sekarang</button>
                    <button type="submit" name="action" value="tambah_keranjang" class="items-center py-2 px-8 border border-[#FF8833] text-[#FF8833] rounded-lg">Keranjang</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection 