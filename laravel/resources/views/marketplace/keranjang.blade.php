@extends('layouts.base')
 
@section('title', 'Keranjang | ')
 
@section('content')
<h1 class="font-semibold text-4xl">Keranjang Saya</h1>
<table class="w-full text-left mt-8">
    <thead>
        <tr class="bg-white text-lg">
            <th scope="col"><input id="purple-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]"></th>
            <th scope="col" class="py-3 font-thin w-1/2">Produk</th>
            <th scope="col" class="py-3 font-thin text-center">Harga</th>
            <th scope="col" class="py-3 font-thin text-center">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </td>
            <td class="py-3 font-medium text-lg">
                Anti Sampah
            </td>
            <td class="py-3 hidden"></td>
            <td class="py-3 hidden"></td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </td>
            <td>
                <div class="flex flex-wrap space-x-6">
                    <img src="{{ asset('img/marketplace/produk-2.png') }}" class="rounded-xl w-[30%]">
                    <h1 class="w-[50%]">Kertas Koran Bekas Murah Untuk Kerajinan Tangan</h1>
                </div> 
            </td>
            <td class="align-text-top text-center">
                Rp 3.000,-
            </td>
            <td class="align-text-top">
                <div class="border w-[30%] mx-auto">
                    <div x-data="{ counter: 1 }">
                        <div class="flex items-center justify-between">
                            <input type="button" value="-"  class="bg-white px-2 cursor-pointer border-r py-1" data-field="quantity" x-on:click="counter--;if(counter < 1){counter = 1;}">
                            <input type="number" name="value" id="value" class="w-[80%] text-center py-0 border-transparent focus:border-transparent focus:ring-0" required min="1" max="10" :value="counter">
                            <input type="button" value="+"  class="bg-white px-2 cursor-pointer border-l py-1" data-field="quantity" x-on:click="counter++;if(counter > 10){counter = 10;}">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div class="flex items-center mt-8 space-x-4">
    <div class="px-10 py-3 rounded-lg border border-gray-200 shadow flex justify-between font-medium xl:w-3/4 w-2/3">
        <h1 class="text-lg">Total Pembayaran</h1>
        <h1>Rp 9000.-</h1>
    </div>
    <div class="text-right">
        <a href="" class="px-10 py-3 font-medium text-center text-lg bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300">
            Bayar Sekarang
         </a>
    </div>
</div>
@endsection 