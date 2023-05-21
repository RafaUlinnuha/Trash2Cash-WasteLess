@extends('layouts.base')
 
@section('title', $judul. ' | ')
 
@section('content')
<x-kategori>
<div class="ml-64">
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach ($produk as $item)
       <a href="{{ route('detail-produk', ['id' => $item->id]) }}" class="produk-4">
          <div class="items-center bg-white border border-gray-200">
              <img src="{{ asset($item->gambar) }}" class="w-full">
              <h1 class="m-2 text-lg">{{$item->nama}}</h1>
              <h2 class="mx-2 my-4 text-[#FF8833]">Rp {{number_format($item->harga,2,',','.')}}</h2>
              <h3 class="m-2 text-right">Kota {{$item->user->alamatUser->kota}}</h3>
          </div>
      </a>
      @endforeach
    </div>
  </x-kategori>
@endsection 
