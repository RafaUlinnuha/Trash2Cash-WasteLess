@extends('layouts.base')
 
@section('title', 'Kategori | ')
 
@section('content')
   <aside class="fixed bg-white">
      <nav class="flex flex-col">
         <a href="{{ route('semua-kategori') }}" class="flex items-center space-x-4 font-semibold">
            <span class="i-ion-options w-8 h-8"></span>
            <span class="text-lg">Semua Kategori</span>
         </a>
         <div class="mt-2">
            <x-sidebar href="{{ route('kategori-plastik') }}" :active="request()->routeIs('kategori-plastik')">
               Plastik
            </x-sidebar>
            <x-sidebar href="{{ route('kategori-kaca-kaleng') }}" :active="request()->routeIs('kategori-kaca-kaleng')">
               Kaca dan Kaleng
            </x-sidebar>
            <x-sidebar href="{{ route('kategori-elektronik') }}" :active="request()->routeIs('kategori-elektronik')">
               Elektronik
            </x-sidebar>
            <x-sidebar href="{{ route('kategori-kertas') }}" :active="request()->routeIs('kategori-kertas')">
               Kertas
            </x-sidebar>
         </div>
      </nav>
   </aside>
   
   <main>
      <div>
         {{ $slot }}
      </div>
   </main>
@endsection 