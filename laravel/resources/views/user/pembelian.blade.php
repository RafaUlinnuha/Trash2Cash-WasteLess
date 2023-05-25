@extends('layouts.base')
 
@section('title', 'Pembelian | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Pembelian</h1>
<div x-data="{ tab: 'tab1' }" class="mt-4">

  <div class="flex flex-row justify-between border-b-2 border-gray-900">

    {{-- <x-tabs class="p-4 font-medium"
      href="#" x-on:click.prevent="tab='tab1'">Semua</x-tabs>
      
    <x-tabs class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='tab2'">Belum Bayar</x-tabs>
      
    <x-tabs class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='tab3'">Diproses</x-tabs>

    <x-tabs class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='tab4'">Dikirim</x-tabs>
      
    <x-tabs class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='tab5'">Selesai</x-tabs>
      
    <x-tabs class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='tab6'">Dibatalkan</x-tabs> --}}
      
  </div>
  <div x-show="tab == 'tab1'" x-cloak>
    
  </div>
  
  <div x-show="tab == 'tab2'" x-cloak>
    
  </div>
  
  <div x-show="tab == 'tab3'" x-cloak>
    
  </div>

  <div x-show="tab == 'tab4'" x-cloak>
   
  </div>

<div x-show="tab == 'tab5'" x-cloak>
 
</div>

<div x-show="tab == 'tab6'" x-cloak><table class="mt-12 w-full border-2 py-8 px-12 shadow">
  
</div>
  
</div>

  
@endsection 