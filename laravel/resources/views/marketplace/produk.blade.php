@extends('layouts.base')
 
@section('title', $judul. ' | ')
 
@section('content')
<x-kategori>
  <div class="md:ml-64">
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4">
      @forelse ($produk as $item)
      <a href="{{ route('detail-produk', ['id' => $item->id]) }}" class="max-w-sm h-80">
          <div class="items-center bg-white border border-gray-200">
              <img src="{{asset('storage/'.$item->gambar)}}" class="w-fit mx-auto h-48">
              <h1 class="m-2 text-lg line-clamp-1">{{$item->nama}}</h1>
              <h2 class="mx-2 my-4 text-[#FF8833]">Rp {{number_format($item->harga,2,',','.')}}</h2>
              <h3 class="m-2 text-right">Kota {{$item->user->alamatUser->kota}}</h3>
          </div>
      </a>
      @empty
      <p>
        Opps, produk tidak ada.
      </p>
      @endforelse
    </div>
  </div>
</x-kategori>
@endsection 
