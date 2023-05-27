@extends('layouts.base')
 
@section('title', 'Marketplace | ')
 
@section('content')
    <div class="kategori">
        <h1 class="text-4xl font-semibold">Kategori</h1>
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-8 mt-8">
            <div class="plastik">
                <x-kategori-button title="Plastik" url="{{ url('/kategori/plastik')}}"></x-kategori-button>
            </div>
            <div class="kaca-kaleng">
                <x-kategori-button title="Kaca dan Kaleng" url="{{ url('/kategori/kaca-dan-kaleng')}}"></x-kategori-button>
            </div>
            <div class="elektronik">
                <x-kategori-button title="Elektronik" url="{{ url('/kategori/elektronik')}}"></x-kategori-button>
            </div>
            <div class="kertas">
                <x-kategori-button title="Kertas" url="{{ url('/kategori/kertas')}}"></x-kategori-button>
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
                <div class="items-center bg-white border border-gray-200">
                    <img src="{{asset('storage/'.$item->gambar)}}" class="w-fit mx-auto h-[60%]">
                    <h1 class="m-2 text-lg line-clamp-1">{{$item->nama}}</h1>
                    <h2 class="mx-2 my-4 text-[#FF8833]">Rp {{number_format($item->harga,2,',','.')}}</h2>
                    <h3 class="m-2 text-right">{{$item->user->alamatUser->kota}}</h3>
                </div>
            </a>
            <?php $i++; ?> 
         @endforeach
        </div>
    </div>
@endsection