@extends('layouts.base')
 
@section('title', 'Pendapatan | ')
 
@section('content')

<h1 class="text-4xl font-semibold">Pendapatan</h1>
    <div class="grid grid-cols-3 gap-4 mt-8">
        <div class="flex-row flex-wrap text-center items-center py-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-xl font-medium">Total Pendapatan Keseluruhan</h1>
            <p class="text-lg text-[#FF8833]">Rp 2.200.000.-</p>
        </div>
        <div class="flex-row flex-wrap text-center items-center py-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-xl font-medium">Total Pendapatan Bulan Ini</h1>
            <p class="text-lg text-[#FF8833]">Rp 500.000.-</p>
        </div>
        <div class="flex-row flex-wrap text-center items-center py-8 border border-gray-200 rounded-lg shadow-md space-y-4">
            <h1 class="text-xl font-medium">Produk yang sering dibeli</h1>
            <p class="text-lg text-[#FF8833]">Sampah Plastik</p>
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
          <tr class="border text-center">
            <td class="px-3 py-3">1</td>
            <td class="px-6 py-3">12/02/2023</td>
            <td class="px-6 py-3">00012</td>
            <td class="px-6 py-3">Sampah Kabel Elektronik </td>
            <td class="px-6 py-3">10 Kg</td>
            <td class="px-6 py-3">Rp 20.000</td>
          </tr>
          
        </tbody>
      </table>
@endsection 