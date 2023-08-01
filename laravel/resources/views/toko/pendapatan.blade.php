@extends('layouts.base')
 
@section('title', 'Pendapatan | ')
 
@section('content')
@php
    $monthNames = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    ];
    $currentMonth = date('n');
@endphp

<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left mt-8">Pendapatan</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 mt-8">
        <div class="flex-row flex-wrap text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-base md:text-xl font-medium">Total Pendapatan Keseluruhan</h1>
            <p class="text-sm md:text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalsemua'],2,',','.')}}</p>
        </div>
        <div class="flex-row flex-wrap text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-base md:text-xl font-medium">Total Pendapatan Bulan {{ $monthNames[$currentMonth] }}</h1>
            <p class="text-sm md:text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalbulanini'],2,',','.')}}</p>
        </div>
        <div class="md:col-span-2 xl:col-span-1 flex-row flex-wrap text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-base md:text-xl font-medium">Produk yang sering dibeli</h1>
            <p class="text-sm md:text-lg text-[#FF8833]">
              {{$pendapatan['produkterlaris']}} 
              @empty($pendapatan['produkterlaris'])
                  -
              @endempty
            </p>
        </div>
    </div>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow text-xs md:text-base">
        <thead>
          <tr class="border">
            <th scope="col" class="md:px-3 py-3 font-medium">No</th>
            <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Tanggal</th>
            <th scope="col" class="py-3 font-medium">Order ID</th>
            <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Nama Barang</th>
            <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Jumlah</th>
            <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Total (Rp)</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        @foreach($items as $item)
          <tr class="border text-center">
            <td class="px-3 py-3">{{$i}}</td>
            <td class="px-6 py-3 hidden md:table-cell">{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</td>
            <td class="px-6 py-3">order-{{substr($item->id,0,6)}}</td>
            <td class="px-6 py-3 hidden md:table-cell">{{$item->produk->nama}} </td>
            <td class="px-6 py-3 hidden md:table-cell">{{$item->jumlah}} Kg</td>
            <td class="px-6 py-3 hidden md:table-cell">Rp {{number_format($item->jumlah*$item->produk->harga,2,',','.')}}</td>
            <td>
              @include('toko.modal.modal-lihatorder')
            </td>
            <?php $i++; ?>
          </tr>
        @endforeach
        </tbody>
      </table>
@endsection 