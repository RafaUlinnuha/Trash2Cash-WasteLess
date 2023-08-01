@extends('layouts.base')
 
@section('title', 'Pendapatan | ')
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

@section('content')
<h1 class="mt-8 text-xl md:text-2xl lg:text-4xl font-semibold text-center md:text-left">Pendapatan</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
    <div class="md:col-span-2 flex-row flex-wrap text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-4">
        <h1 class="text-base md:text-xl font-medium">Total Pendapatan Keseluruhan</h1>
        <p class="text-sm md:text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalsemua'],2,',','.')}}</p>
    </div>
    <div class="flex-row flex-wrap text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-4">
        <h1 class="text-base md:text-xl font-medium">Total Pendapatan Bulan {{ $monthNames[$currentMonth] }}</h1>
        <p class="text-sm md:text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalbulanini'],2,',','.')}}</p>
    </div>
    <div class=" flex-row flex-wrap text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-4">
        <h1 class="text-base md:text-xl font-medium">Total Sampah yang Disetorkan</h1>
        <p class="text-sm md:text-lg text-[#FF8833]">
            {{$pendapatan['totalkg']}}
            Kg
        </p>
    </div>
</div>
<div class="col-span-2 relative overflow-x-auto shadow-md mt-4 sm:rounded-lg">
    <table>
        <thead>
            <tr class="text-sm">
                <th scope="col" class="px-3 py-3 font-medium">No</th>
                <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell">Tanggal</th>
                <th scope="col" class="px-3 py-3 font-medium">Setor ID</th>
                <th scope="col" class="px-3 py-3 font-medium">Nama Jenis</th>
                <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell">Jumlah</th>
                <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell">Total (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach($sampah as $items)
                @foreach($items->itemSampah as $item)
                <tr class="border text-center">
                    <td class="px-3 py-3">{{$i}}</td>
                    <td class="px-3 py-3 hidden md:table-cell">{{ \Carbon\Carbon::parse($items->created_at)->format('d/m/Y') }}</td>
                    <td class="px-3 py-3">setor-{{substr($items->id,0,6)}}</td>
                    <td class="px-3 py-3 hidden md:table-cell">{{$item->nama_jenis}} </td>
                    <td class="px-3 py-3 hidden md:table-cell">{{$item->jumlah}} Kg</td>
                    <td class="px-3 py-3 hidden md:table-cell">Rp {{number_format($item->jumlah*$item->hargasatuan,2,',','.')}}</td>
                    @php $i++ @endphp
                </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>
@endsection 