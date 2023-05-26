@extends('layouts.base')
 
@section('title', 'Penjualan | ')
 
@section('content')

<h1 class="font-semibold text-4xl">Penjualan</h1>    
<div class="text-right">
    <button href="" class="px-8 py-2 font-medium text-center bg-[#6C894A] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300">
        Tambah Data
    </button>
</div>
<table class="mt-8 w-full border-2 py-8 px-12 shadow">
    <thead>
      <tr class="border text-base">
        <th scope="col" class="px-3 py-3 font-medium">No</th>
        <th scope="col" class="px-6 py-3 font-medium">Nama Barang</th>
        <th colspan="2" class="px-6 py-3 font-medium">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
    @foreach($produk as $item)
      <tr class="border text-center">
        <td class="w-1/12 py-3">{{$i}}</td>
        <td class="w-2/3 py-3 text-left">{{$item->nama}} </td>
        <td class="px-6 py-3">
            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
        </td>
        <td class="px-6 py-3">
          <form method="POST" action="{{route('penjualan.del', $item->id)}}">
          @csrf @method('DELETE')
            <button type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
        </td>
        <?php $i++; ?>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection 