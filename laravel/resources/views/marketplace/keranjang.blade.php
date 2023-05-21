@extends('layouts.base')
 
@section('title', 'Keranjang | ')
 
@section('content')
<h1 class="font-semibold text-4xl">Keranjang Saya</h1>
<table class="w-full text-left mt-8">
    <thead>
        <tr class="bg-white text-lg">
            <th scope="col"><input checked id="purple-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]"></th>
            <th scope="col" class="py-3 font-thin w-1/2">Produk</th>
            <th scope="col" class="py-3 font-thin">Harga</th>
            <th scope="col" class="py-3 font-thin">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input checked type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </td>
            <td class="py-3 font-medium text-lg">
                Anti Sampah
            </td>
            <td class="py-3 hidden"></td>
            <td class="py-3 hidden"></td>
        </tr>
        <tr>
            <td>
                <input checked type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </td>
            <td>
                <div class="flex flex-wrap space-x-6">
                    <img src="{{ asset('img/marketplace/produk-2.png') }}" class="rounded-xl w-[30%]">
                    <h1 class="w-[50%]">Kertas Koran Bekas Murah Untuk Kerjainan Tangan</h1>
                </div> 
            </td>
            
            <td class="align-text-top">
                Rp 3.000,-
            </td>
            <td class="align-text-top">
                <div class="jumlah">
                    <div class="border border-gray-200 rounded">
                        <div class="flex flex-row h-8 w-24 bg-transparent">
                            <button data-action="decrement" class="bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-l cursor-pointer">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number" class="text-center w-full font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah" value="0">
                            <button data-action="increment" class="bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

@endsection 