@extends('layouts.base')
 
@section('title', 'Rincian User| ')
 
@section('content')
<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Rincian User</h1>
<nav class="flex my-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="{{route('admin.user')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg  class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                User
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Rincian User</span>
            </div>
        </li>
    </ol>
</nav>
<div class="grid xl:grid-cols-2 lg:grid-cols-1 mt-8 md:mt-0 space-y-6 md:space-y-8 xl:space-y-0">
    <div class="foto items-center flex flex-col space-y-8">
        @if($user->foto_profil == null)
        <!-- if gaada foto profil -->
        <span class="i-bi-people-circle w-32 h-32 md:w-48 md:h-48"></span>
        @else
        <!-- kl ada foto profil -->
        <img src="{{asset('storage/foto_user/'.$user->foto_profil)}}" alt="" class="w-32 h-32 md:w-48 md:h-48 rounded-full">
        @endif
    </div>
    <div class="data border-2 md:py-8 p-6 md:px-12 shadow rounded-lg">
        <div class="space-y-4">
            <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                <div class="md:w-1/3 md:text-lg">Nama</div>
                <div class="md:w-2/3">
                    <input disabled class="h-10 w-full placeholder-gray-600 rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block p-3 text-sm md:text-base" type="text" placeholder="{{$user->nama}}">
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                <div class="md:w-1/3 md:text-lg">No Telepon</div>
                <div class="md:w-2/3">
                    <input disabled class="h-10 w-full placeholder-gray-600 rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block p-3 text-sm md:text-base" type="text" placeholder="{{$user->no_hp}}">
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                <div class="md:w-1/3 md:text-lg items-start">Email</div>
                <div class="md:w-2/3">
                    <input disabled class="h-10 w-full placeholder-gray-600 rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block p-3 text-sm md:text-base" type="email" placeholder="{{$user->email}}">
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                <div class="md:w-1/3 md:text-lg items-start">Alamat</div>
                <div class="md:w-2/3">
                    <textarea disabled rows="4" class="w-full px-3 pt-2 placeholder-gray-600 rounded-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm md:text-base" name="alamat" id="alamat" 
                      placeholder="{{$user->AlamatUser->alamat === null ? '' : $user->AlamatUser->alamat.', '.$user->AlamatUser->kecamatan.', '.$user->AlamatUser->kota.', '.$user->AlamatUser->provinsi.', '.$user->AlamatUser->kode_pos}}"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INFO REKENING -->
<h1 class="text-base lg:text-xl font-semibold text-center mt-8 md:text-left">Informasi Rekening</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-2">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No Rekening</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Nama Bank</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Nama Pemilik Rekening</th>
        </tr>
        </thead>
        <tbody>
        @forelse($user->metodePembayaran as $rekening)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$rekening->no_rek}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$rekening->nama_metode}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">{{$rekening->atas_nama}}</td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class = "text-center text-sm text-gray-600 p-4">
                    Tidak ada rekening yang terdaftar
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>  
@if($user->role == 'pembeli' || $user->role == 'anggota')
<!-- INFO PENYETORAN SAMPAH -->
<h1 class="text-base lg:text-xl font-semibold text-center mt-8 md:text-left">Informasi Penyetoran</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-2">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">
                <div class="flex justify-center">
                    @sortablelink('updated_at', 'Tanggal')
                    <div><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg>
                    </div>
                </div>
            </th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Setor Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Bank Sampah</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Harga</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">rincian</th>
        </tr>
        </thead>
        <tbody>
        @forelse($user->sampah_anggota as $item)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">setor-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">{{$item->bankUser->nama}}</td>
            @php
            $harga = 0;
            foreach($item->itemSampah as $it){
                $harga+=$it->jumlah*$it->hargasatuan;
            }
            @endphp
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">Rp {{number_format($harga,2,',','.')}}</td>
            <td class="px-3 py-4 flex justify-center">
                <a href="{{route('admin.rincian-setor', $item->id)}}" class="font-medium">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z"/>
                    <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z"/>
                </svg>
                </a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class = "text-center text-sm text-gray-600 p-4">
                    Tidak ada penyetoran
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>  

<!-- INFO ORDER SAMPAH -->
<h1 class="text-base lg:text-xl font-semibold text-center mt-8 md:text-left">Informasi Order</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-2">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Tanggal</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Order Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Harga</th>
        </tr>
        </thead>
        <tbody>
        @forelse($user->order as $item)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">order-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">Rp {{number_format($item->pembayaran->total,2,',','.')}}</td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class = "text-center text-sm text-gray-600 p-4">
                    Tidak ada order
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

<!-- UNTUK BANK SAMPAH -->
@elseif($user->role == 'bank_sampah')
<!-- INFO PENYETORAN SAMPAH -->
<h1 class="text-base lg:text-xl font-semibold text-center mt-8 md:text-left">Informasi Penyetoran</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-2">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">
                <div class="flex justify-center">
                    @sortablelink('updated_at', 'Tanggal')
                    <div><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg>
                    </div>
                </div>
            </th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Setor Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Anggota Bank Sampah</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Harga</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">rincian</th>
        </tr>
        </thead>
        <tbody>
        @forelse($user->sampah_bank as $item)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">setor-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">{{$item->anggotaUser->nama}}</td>
            @php
            $harga = 0;
            foreach($item->itemSampah as $it){
                $harga+=$it->jumlah*$it->hargasatuan;
            }
            @endphp
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">Rp {{number_format($harga,2,',','.')}}</td>
            <td class="px-3 py-4 flex justify-center">
                <a href="{{route('admin.rincian-setor', $item->id)}}" class="font-medium">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z"/>
                    <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z"/>
                </svg>
                </a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class = "text-center text-sm text-gray-600 p-4">
                    Tidak ada penyetoran
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>  

<!-- INFO ORDER SAMPAH -->
<h1 class="text-base lg:text-xl font-semibold text-center mt-8 md:text-left">Informasi Order</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-2">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Tanggal</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Order Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Nama Pembeli</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Jenis Produk</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Jumlah</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Harga</th>
        </tr>
        </thead>
        <tbody>
        @php
        $orders = App\Models\Order::get();
        @endphp
        @forelse($orders as $order)
            @foreach($order->itemOrder as $item)
            @if($item->produk->user_id == $user->id)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">order-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$order->user->nama}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$item->produk->kategoriSampah->nama}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$item->jumlah}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">Rp {{number_format($item->produk->harga*$item->jumlah,2,',','.')}}</td>
        </tr>
        @endif
        @endforeach
        @empty
            <tr>
                <td colspan="5" class = "text-center text-sm text-gray-600 p-4">
                    Tidak ada order
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
<!-- INFO PENJUALAN (PRODUK) -->
<h1 class="text-base lg:text-xl font-semibold text-center mt-8 md:text-left">Informasi Produk Penjualan</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-2">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Tanggal</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Order Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Nama Produk</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Kategori</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Jumlah</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-sm uppercase border-l-0 border-r-0 font-semibold">Harga</th>
        </tr>
        </thead>
        <tbody>
        @forelse($user->produk as $item)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">produk-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$item->nama}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$item->kategoriSampah->nama}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">{{$item->jumlah}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-center">Rp {{number_format($item->harga,2,',','.')}}</td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class = "text-center text-sm text-gray-600 p-4">
                    Tidak ada order
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endif
@endsection 