@extends('layouts.base')
 
@section('title', 'Marketplace | ')
 
@section('content')
    <div class="kategori">
        <h1 class="text-4xl font-semibold">Kategori</h1>
        <div class="grid grid-cols-4 gap-8 mt-4">
            <div class="plastik">
                <a href="{{ url('/kategori/plastik')}}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-neutral-50 tracking-wide">Plastik</h1>
                </a>
            </div>
            <div class="kaca-kaleng">
                <a href="{{ url('/kategori/kaca-dan-kaleng')}}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-white tracking-wide">Kaca dan Kaleng</h1>
                </a>
            </div>
            <div class="elektronik">
                <a href="{{ url('/kategori/elektronik')}}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
                    <h1 class="text-lg font-medium mx-auto text-white tracking-wide">Elektronik</h1>
                </a>
            </div>
            <div class="kertas">
                <a href="{{ url('/kategori/kertas')}}" class="flex flex-wrap items-center p-4 bg-[#8092C1] rounded-lg transition ease-in-out hover:bg-[#7588BB] duration-300">
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
            <?php $i=1; ?>
        @foreach ($produk as $item)
            <a href="{{ route('detail-produk', ['id' => $item->id]) }}" class="produk-<?= $i; ?>">
                <div class="items-center bg-white border border-gray-200 transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset($item->gambar) }}" class="w-full">
                    <h1 class="m-2 text-lg">{{$item->nama}}</h1>
                    <h2 class="mx-2 my-4 text-[#FF8833]">Rp {{number_format($item->harga,2,',','.')}}</h2>
                    <h3 class="m-2 text-right">{{$item->user->alamatUser->kota}}</h3>
                </div>
            </a>
            <?php $i++; ?> 
         @endforeach
        </div>
    </div>
@endsection