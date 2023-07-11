@extends('layouts.base')
 
@section('title', 'Konfirmasi Penyetoran | ')
 
@section('content')
    <div class="p-4 md:p-6 rounded-lg border border-gray-200 shadow">
        <h1 class="font-semibold text-sm md:text-base row">Informasi Penjemputan</h1>
        <div class="mt-2 grid grid-rows-2 md:grid-rows-1 grid-flow-col gap-2 md:gap-4 text-sm md:text-base">
            <div class="row font-medium text-xs md:text-sm my-0 md:my-0">
                <h2 class="whitespace-normal">{{$sampah->anggotaUser->nama}}</h2>
                <h3 class="whitespace-normal">{{$sampah->anggotaUser->no_hp}}</h3>
            </div>
            <div class="row">
                <h4 class="text-xs md:text-sm whitespace-normal">{{$sampah->anggotaUser->alamatUser->alamat}}, Kecamatan {{$sampah->anggotaUser->alamatUser->kecamatan}}, Kota {{$sampah->anggotaUser->alamatUser->kota}}, {{$sampah->anggotaUser->alamatUser->provinsi}}, {{$sampah->anggotaUser->alamatUser->kode_pos}}</h4>
            </div>
        </div>
        <div class="mt-6 md:mt-4 space-y-2">
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-4 group">
                    <label for="kategori" class="text-xs md:text-sm block font-medium dark:text-white">Tanggal Penjemputan</label>
                    <input type="date" name="tanggal" min=" date('Y-m-d', strtotime('+1 day')) }}" disabled class="block py-2.5 px-0 w-full text-xs md:text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$sampah->tgl_jemput}}" />
                </div>
                <div class="relative z-0 w-full group">
                <label for="kategori" class="text-xs md:text-sm block font-medium dark:text-white">Waktu Penjemputan</label>
                    <input type="text" name="waktu" class="block py-2.5 px-0 w-full text-xs md:text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled value="{{$sampah->waktu_jemput}} WIB"> 
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 rounded-lg border border-gray-200 shadow mt-4 md:mt-8 text-sm md:text-base">
        <h1 class="font-semibold text-sm md:text-base">Sampah yang Disetorkan</h1>
        @php $harga = 0 @endphp
        @foreach($sampah->itemSampah as $item)
        <div class="p-2 rounded-lg border border-gray-200">
            <div class="flex grid grid-cols-2 md:grid-cols-6 md:flex-row md:justify-between space-y-2">
                <div class="md:flex-row flex mt-2 md:mt-0 space-y-1 md:space-y-0 text-xs md:text-sm hidden md:block">
                    <img src="{{asset('storage/'.$item->kategoriSampah->gambar)}}" class="rounded-xl w-16 h-16 m-2">
                </div>
                <div class="col-span-1 md:col-span-2 md:flex-rows flex mt-2 mt-0 md:mt-2 space-y-1 md:space-y-0 text-xs md:text-sm">
                    <div class="grid grid-col-1 grid-row-6 gap-0">
                        <h1 class="row-span-1 font-semibold">{{$item->nama_jenis}}</h1>
                        <h1 class="row-span-1">Ketegori {{$item->kategoriSampah->nama}}</h1>
                        <h1 class="hidden md:table-cell">Deskripsi: {{$item->deskripsi == null? '-' : $item->deskripsi}}</h1>
                        <h1 class="sm:hidden">{{$item->jumlah}} Kg</h1>
                        <h1 class="sm:hidden">Rp {{number_format($item->jumlah*$item->hargasatuan,2,',','.')}}</h1>
                        <h1 class="hidden md:table-cell row-span-3"> </h1>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-3 md:flex-rows grid grid-cols-1 md:grid-cols-4 flex mt-0 md:space-y-0 text-xs md:text-sm md:items-center">
                    <h2 class="hidden md:table-cell text-first text-xs md:text-sm">{{$item->jumlah}} Kg</h2>
                    <h2 class="hidden md:table-cell text-xs md:text-sm">Rp {{number_format($item->jumlah*$item->hargasatuan,2,',','.')}}</h2>
                    @if($sampah->status == 'ongoing')
                    <div class="text-xs grid col-span-2 grid-cols-1 sm:flex-row justify-items-end items-first">
                        <button data-modal-target="editsampah-modal-{{$item->id}}" data-modal-toggle="editsampah-modal-{{$item->id}}" class="text-white w-[60%] h-1/2 md:h-full md:w-3/4 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full p-2 text-center mb-2 md:my-0 md:mx-0 dark:bg-blue-600 dark:hover inline-flex:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @include('banksampah.modal.modal-edit')
        @php $harga += $item->jumlah*$item->hargasatuan @endphp
        @endforeach
        <hr>
        <h3 class="my-2 text-right font-medium text-xs md:text-sm">Total Harga : Rp {{number_format($harga,2,',','.')}}</h3>
    </div>
    
    <div class="mt-4 text-right text-sm md:text-base w-full">
        <button type="button" data-modal-target="#modal{{$sampah->id}}" data-modal-toggle="modal{{$sampah->id}}" class="{{$sampah->status == 'selesai'? 'invisible':''}} md:px-10 py-3 font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 w-full">
            Konfirmasi Penyetoran
        </button>
        @include('banksampah.modal.modal-konfirmasi')
    </div>
    

@endsection