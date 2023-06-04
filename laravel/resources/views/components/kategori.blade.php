@extends('layouts.base')
 
@section('title', 'Kategori | ')
 
@section('content')
   <aside class="fixed bg-white">
      <nav class="flex flex-col">
         <a href="{{ route('semua-kategori') }}" class="hidden md:flex items-center space-x-4 font-semibold">
            <span class="i-ion-options w-8 h-8"></span>
            <span class="text-lg">Semua Kategori</span>
         </a>
         <div class="mt-2">
            <x-sidebar href="{{ url('/kategori/plastik')}}" :active="request()->segment(2) == 'plastik'">
               Plastik
            </x-sidebar>
            <x-sidebar href="{{ url('/kategori/kaca-dan-kaleng')}}" :active="request()->segment(2) == 'kaca-dan-kaleng'">
               Kaca dan Kaleng
            </x-sidebar>
            <x-sidebar href="{{ url('/kategori/elektronik')}}" :active="request()->segment(2) == 'elektronik'">
               Elektronik
            </x-sidebar>
            <x-sidebar href="{{ url('/kategori/kertas')}}" :active="request()->segment(2) == 'kertas'">
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