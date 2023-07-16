@extends('layouts.base')
 
@section('title', 'Daur Ulang | ')
 
@section('content')
<h1 class="text-xl md:text-2xl lg:text-4xl font-semibold text-center md:text-left mb-4">Setor Daur Ulang</h1>
<button data-modal-target="addsampah-modal" data-modal-toggle="addsampah-modal" class=" md:mt-0 px-2 md:px-8 py-2 font-medium text-sm text-center hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-2xl transition ease-in-out delay-150 hover:scale-110 duration-300" type="button">
    <span class="i-material-symbols-add flex md:hidden"></span>  
    <span class="md:flex hidden">Tambah Setoran</span>
</button>
@include('anggota.modal.modal-add')
@include('toko.modal.modal-addproduk')

@if(session('success'))
    @component('components.alert', ['id' => 'alert-3', 'color' => 'green','message' => session('success')])
    @endcomponent
@endif
<table class="w-full text-left mt-4 text-xs md:text-sm">
    <br>
    @php $harga = 0 @endphp
    @if(isset($sampah))
    @if($sampah->itemSampah->isEmpty())
    <br>
    <p class="text-sm md:text-lg">Belum ada sampah yang ingin disetorkan</p>
    @else
    <thead>
        <tr class="bg-white">
            <th class="py-3 font-thin pl-2 md:pl-0 hidden md:table-cell md:w-1/2">Jenis Sampah</th>
            <th scope="col" class="py-0  font-thin text-center md:py-3 hidden md:table-cell">Estimasi Harga</th>
            <th scope="col" class="py-0  font-thin text-center hidden md:   py-3 md:table-cell">Jumlah</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($sampah->itemSampah as $item)
        <tr>
            <td>
                <div class="flex flex-wrap ml-2 md:ml-0 md:space-x-4 space-y-2 md:space-y-0">
                    <img src="{{asset('storage/'.$item->kategoriSampah->gambar)}}" class="rounded-xl w-14 m-2 h-14 md:w-24 md:h-24">
                    <table class="">
                        <tr><td>
                            <h1 class="text-xs md:text-sm mx-2 font-semibold">{{$item->nama_jenis}}</h1>
                        </td> </tr>
                        <tr>
                            <td>
                                <h1 class="text-xs md:text-sm mx-2">Kategori</h1>
                            </td> 
                            <td>
                                <h1 class="text-xs md:text-sm">: {{$item->kategoriSampah->nama}}</h1>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <h1 class="text-xs md:text-sm mx-2">Deskripsi</h1>
                            </td> 
                            <td>
                                <h1 class="text-xs md:text-sm">: {{$item->deskripsi == null?'-':$item->deskripsi}}</h1>
                            </td> 
                        </tr>
                    </table>
                </div> 
            </td>
            <td class="align-text-top text-sm md:text-base text-center hidden md:table-cell">
                Rp {{number_format($item->hargasatuan,2,',','.')}}
            </td>
            <td class="align-text-top hidden md:table-cell">
                <div class="border md:w-[50%] mx-auto">
                    <div class="flex items-center justify-between">
                        <a href="{{route('sampah.dec', ['id' => $item->id])}}" class="bg-white p-1 md:px-1 cursor-pointer border-r md:py-1 text-sm md:text-base">-</a>
                <input type="number" name="jumlah" class="md:w-[80%] w-10 text-center py-0 border-transparent focus:border-transparent focus:ring-0 text-sm md:text-base" readonly min="1" value="{{$item->jumlah}}">
                        <a href="{{route('sampah.inc', ['id' => $item->id])}}" class="bg-white p-1 md:px-1 cursor-pointer border-l md:py-1 text-sm md:text-base">+</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="flex mt-1 items-center ml-2 md:hidden">
                <div class="text-sm w-2/3 font-medium">
                    Rp {{number_format($item->hargasatuan,2,',','.')}}
                </div>
                <div class="border mx-auto">
                    <div class="flex items-center justify-between">
                        <a href="{{route('sampah.dec', ['id' => $item->id])}}" class="bg-white p-1 md:px-2 cursor-pointer border-r md:py-1 text-sm md:text-base">-</a>
                        <input type="number" name="jumlah" class="md:w-[80%] w-10 text-center py-0 border-transparent focus:border-transparent focus:ring-0 text-sm md:text-base" readonly min="1" value="{{$item->jumlah}}">
                        <a href="{{route('sampah.inc', ['id' => $item->id])}}" class="bg-white p-1 md:px-2 cursor-pointer border-l md:py-1 text-sm md:text-base">+</a>
                    </div>
                </div>
            </td>
        </tr>
        @php $harga += $item->jumlah*$item->hargasatuan @endphp
        @endforeach
    </tbody>
    @endif
    @endif
</table>
<div class="flex flex-col md:flex-row items-center mt-8 space-y-4 md:space-y-0 md:space-x-4">
    <div class="md:px-10 px-4 py-3 rounded-lg border border-gray-200 shadow flex justify-between font-medium xl:w-3/4 md:w-2/3 w-full items-center">
        <h1 class="text-sm md:text-lg">Total Estimasi Penjualan</h1>
        <h1 id="total" class="text-sm md:text-lg w-fit">Rp {{number_format($harga,2,',','.')}}</h1>
    </div>
    <div class="text-right xl:w-1/4 md:w-1/3 w-full">
    <button onclick="window.location.href = '{{route('setor.konfirmasi', ['id' => $sampah->id])}}'" {{$sampah->itemSampah->isEmpty() ? 'disabled' : ''}} class="md:px-12 py-3 font-medium text-center text-sm md:text-base lg:text-lg bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 w-full">
        Setor Sekarang
    </button>

    </div>
</div>

@endsection 
