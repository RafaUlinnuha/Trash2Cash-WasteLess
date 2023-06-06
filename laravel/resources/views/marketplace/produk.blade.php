@extends('layouts.base')
 
@section('title', $judul. ' | ')
 
@section('content')
  <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
  </button>
  <aside id="default-sidebar" class="fixed md:top-32 md:left-12 z-50 md:z-20 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 md:py-0 overflow-y-auto bg-gray-50 md:bg-white">
      <ul class="space-y-6">
        <div class="mt-2" aria-hidden="true">
          <li>
            <x-sidebar href="{{ url('/semua-kategori')}}" :active="request()->segment(1) == 'semua-kategori'">
              Semua Kategori
            </x-sidebar>
          </li>
          <li>
            <x-sidebar href="{{ url('/kategori/plastik')}}" :active="request()->segment(2) == 'plastik'">
              Plastik
            </x-sidebar>
          </li>
          <li>
            <x-sidebar href="{{ url('/kategori/kaca-dan-kaleng')}}" :active="request()->segment(2) == 'kaca-dan-kaleng'">
              Kaca dan Kaleng
            </x-sidebar>
          </li>
          <li>
            <x-sidebar href="{{ url('/kategori/elektronik')}}" :active="request()->segment(2) == 'elektronik'">
              Elektronik
            </x-sidebar>
          </li>
          <li>
            <x-sidebar href="{{ url('/kategori/kertas')}}" :active="request()->segment(2) == 'kertas'">
              Kertas
            </x-sidebar>
          </li>
      </div>
      </ul>
    </div>
  </aside>

  <div class="p-4 sm:ml-64">
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

@endsection 
