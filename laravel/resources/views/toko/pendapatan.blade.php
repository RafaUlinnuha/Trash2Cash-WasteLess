@extends('layouts.base')
 
@section('title', 'Pendapatan | ')
 
@section('content')

<h1 class="text-4xl font-semibold">Pendapatan</h1>
    <div class="grid grid-cols-2 xl:grid-cols-3 gap-4 mt-8">
        <div class="flex-row flex-wrap text-center items-center py-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-xl font-medium">Total Pendapatan Keseluruhan</h1>
            <p class="text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalsemua'],2,',','.')}}</p>
        </div>
        <div class="flex-row flex-wrap text-center items-center py-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-xl font-medium">Total Pendapatan Bulan Ini</h1>
            <p class="text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalbulanini'],2,',','.')}}-</p>
        </div>
        <div class="col-span-2 xl:col-span-1 flex-row flex-wrap text-center items-center py-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-xl font-medium">Produk yang sering dibeli</h1>
            <p class="text-lg text-[#FF8833] line-clamp-1">{{$pendapatan['produkterlaris']}}</p>
        </div>
    </div>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
        <thead>
          <tr class="border text-base">
            <th scope="col" class="px-3 py-3 font-medium">No</th>
            <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
            <th scope="col" class="px-6 py-3 font-medium">User</th>
            <th scope="col" class="px-6 py-3 font-medium">Nama Barang</th>
            <th scope="col" class="px-6 py-3 font-medium">Jumlah</th>
            <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        @foreach($items as $item)
          <tr class="border text-center">
            <td class="px-3 py-3">{{$i}}</td>
            <td class="px-6 py-3">{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
            <td class="px-6 py-3">order-{{substr($item->id,0,6)}}</td>
            <td class="px-6 py-3">{{$item->produk->nama}} </td>
            <td class="px-6 py-3">{{$item->jumlah}} Kg</td>
            <td class="px-6 py-3">Rp {{number_format($item->jumlah*$item->produk->harga,2,',','.')}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection 