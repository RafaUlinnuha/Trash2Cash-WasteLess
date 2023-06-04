@extends('layouts.base')
 
@section('title', 'Penjualan | ')
 
@section('content')

<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Penjualan</h1>    
<!-- Modal toggle -->
<div class="text-right">
    <button data-modal-target="addproduk-modal" data-modal-toggle="addproduk-modal" class="mt-6 md:mt-0 px-2 md:px-8 py-2 font-medium text-sm text-center text-white bg-[#8092C1] hover:bg-blue-800 rounded-full md:rounded-lg transition ease-in-out delay-150 duration-300" type="button">
      <span class="i-material-symbols-add flex md:hidden"></span>  
      <span class="md:flex hidden">Tambah Produk</span>
    </button>
</div>
<!-- ketika add produk berhasil -->
@include('toko.modal.modal-addproduk')
@if(session('add'))
    @component('components.alert', ['id' => 'alert-3', 'color' => 'green','message' => session('add')])
    @endcomponent
@endif

<!-- ketika update produk berhasil -->
@if(session('update'))
    @component('components.alert', ['id' => 'alert-3', 'color' => 'green','message'=>session('update')])
    @endcomponent
@endif

<!-- ketika add/update produk gagal -->
@if($errors->any())
    @component('components.alert', ['id' => 'alert-3', 'color' => 'red', 'message' => 'Failed to create/update product'])
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endcomponent
@endif

<table class="mt-2 md:mt-8 w-full border-2 py-8 px-12 shadow text-sm md:text-base">
    <thead>
      <tr class="border">
        <th scope="col" class="px-1.5 md:px-3 py-3 font-medium">No</th>
        <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Gambar </th>
        <th scope="col" class="md:px-6 py-3 font-medium">Nama Barang</th>
        <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Stok</th>
        <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
    @foreach($produk as $item)
      <tr class="border text-center text-xs md:text-base">
        <td class="md:w-1/12 py-3">{{$i}}</td>
        <td class="md:w-3/12 py-3 hidden md:table-cell"><img src="{{asset('storage/'.$item->gambar)}}" alt="" class="p-4"></td>
        <td class="md:w-4/12 py-3 text-left">{{$item->nama}} </td>
        <td class="md:w-1/12 py-3 text-center hidden md:table-cell">{{$item->jumlah}} </td>
        <td class="md:w-1/12 py-3 text-center hidden md:table-cell">Rp {{number_format($item->harga,2,',','.')}}</td>
        <td>
          @include('toko.modal.modal-editproduk')
        </td>
        <td>
          @include('toko.modal.modal-delete')
        </td>
        <?php $i++; ?>
      </tr>
    @endforeach
    </tbody>
  </table>
<!--  -->
@endsection 

