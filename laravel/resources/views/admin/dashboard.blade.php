@extends('layouts.base')
 
@section('title', 'Admin | ')
 
@section('content')
<div class="grid grid-cols-1 p-4">
    <h1 class="text-base md:text-xl">
    Hallo Admin,
    </h1>
    <h1 class="text-xl md:text-3xl">
    Selamat datang di WasteLess!
    </h1>        
</div>
<div class="grid grid-cols-2 lg:grid-cols-4 gap-2 my-2">
    <div class=" bg-[#6C894A] col-span-2 row-span-2 flex justify-center justify-items-center grid grid-rows-2 dark:bg-gray-800 shadow-lg rounded-md items-center p-3 border-green-900 border-b-4 border-stroke-current text-white dark:border-gray-600 font-medium group">
        <div class=" justify-center items-center flex w-12 h-12 bg-stroke-current bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-[#6C894A] dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </div>
        <div class="text-center">
            <p class="text-xl md:text-2xl">{{$user['total']}}</p>
            <p class="text-lg md:text-xl">Total Akun Terdaftar</p>
        </div>
    </div>
    <div class="dark:bg-gray-800 shadow-lg rounded-md grow md:flex items-center justify-between p-3 border border-b-4 border-[#6C894A] dark:border-gray-600 bg-white font-medium group">
        <div class="flex justify-center items-center hidden md:flex w-14 h-14 bg-[#6C894A] rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-white dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </div>
        <div class="text-center md:text-right">
            <p class="text-lg md:text-xl">{{$user['anggota']}}</p>
            <p class="text-xs md:text-sm">Anggota</p>
        </div>
    </div>
    <div class="dark:bg-gray-800 shadow-lg rounded-md grow md:flex items-center justify-between p-3 border border-b-4 border-[#6C894A] dark:border-gray-600 bg-white font-medium group">
        <div class="flex justify-center items-center hidden md:flex w-14 h-14 bg-[#6C894A] rounded-full transition-all duration-300 transform group-hover:rotate-12"> 
            <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="stroke-current text-white dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
            </svg>
        </div>
        <div class="text-center md:text-right">
            <p class="text-lg md:text-xl">{{$user['bank']}}</p>
            <p class="text-xs md:text-sm">Bank Sampah</p>
        </div>
    </div>
    <div class="dark:bg-gray-800 shadow-lg rounded-md grow md:flex items-center justify-between p-3 border border-b-4 border-[#6C894A] dark:border-gray-600 bg-white font-medium group">
        <div class="flex justify-center items-center hidden md:flex w-14 h-14 bg-[#6C894A] rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-white dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        </div>
        <div class="text-center md:text-right">
            <p class="text-lg md:text-xl">{{$user['order']}}</p>
            <p class="text-xs md:text-sm">Order</p>
        </div>
    </div>
    <div class="gap-2 dark:bg-gray-800 shadow-lg rounded-md grow md:flex items-center justify-between p-3 border border-b-4 border-[#6C894A] dark:border-gray-600 bg-white font-medium group">
        <div class="flex justify-center items-center hidden md:flex w-14 h-14 bg-[#6C894A] rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="stroke-current text-white dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
        </div>
        <div class="text-center md:text-right">
            <p class="text-lg md:text-xl">{{$user['setor']}}</p>
            <p class="text-xs md:text-sm">Penyetoran</p>
        </div>
    </div>
</div>
<div class="grid grid-cols-2 gap-2">
    <div class="bg-[#FF8833] dark:bg-gray-800 shadow-lg rounded-md grow lg:flex items-center justify-between p-3 border border-b-4 border-amber-800 dark:border-gray-600 text-white font-medium group">
        <div class=" justify-center items-center hidden lg:flex w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-current text-[#FF8833] dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
            </svg>
        </div>
        <div class="text-center lg:text-right">
            <p class="text-xl md:text-3xl">Rp {{number_format($user['transaksiorder'],2,',','.')}}</p>
            <p class="text-sm md:text-base">Transaksi Marketplace</p>
        </div>
    </div>
    <div class="bg-[#FF8833] dark:bg-gray-800 shadow-lg rounded-md grow lg:flex items-center justify-between p-3 border border-b-4 border-amber-800 dark:border-gray-600 text-white font-medium group">
        <div class=" justify-center items-center hidden lg:flex w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"> 
            <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-current text-[#FF8833] dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
            </svg>
        </div>
        <div class="text-center lg:text-right">
            <p class="text-xl md:text-3xl">Rp {{number_format($user['transaksisetor'],2,',','.')}}</p>
            <p class="text-sm md:text-base">Transaksi Penyetoran</p>
        </div>
    </div>
</div>

<div class="relative flex flex-col min-w-0 my-4 lg:mb-0 break-words border-2 border-gray-200 dark:bg-gray-800 w-full shadow-lg rounded">
    <div class="rounded-t mb-0 px-0 border-gray-200">
        <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Kegiatan Penyetoran Sampah</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                <a href="{{route('admin.penyetoran')}}" class="bg-[#6C894A] dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</a>
            </div>
        </div>
        <div class="block w-full overflow-x-auto border border-gray-200">
        @php $i=1 @endphp
        <table class="items-center w-full bg-transparent border-collapse">
            <thead>
            <tr>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">No</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">Tanggal</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">Setor Id</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">Harga</th>
            </tr>
            </thead>
            <tbody>
            @forelse($sampah as $item)
            <tr class="text-gray-700 dark:text-gray-100">
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$i++}}</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">setor-{{substr($item->id,0,6)}}</td>
                @php
                $harga = 0;
                foreach($item->itemSampah as $it){
                    $harga+=$it->jumlah*$it->hargasatuan;
                }
                @endphp
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Rp {{number_format($harga,2,',','.')}}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="5" class = "text-center text-xs text-gray-600 p-4">
                        Tidak ada transaksi
                    </td> 
                </tr>
            @endforelse
            </tbody>
        </table>
        </div>
    </div>
</div>

<div class="relative flex flex-col min-w-0 my-4 lg:mb-0 break-words border-2 border-gray-200 dark:bg-gray-800 w-full shadow-lg rounded">
    <div class="rounded-t mb-0 px-0 border-gray-200">
        <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Kegiatan Order pada Marketplace</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                <a href="{{route('admin.penyetoran')}}" class="bg-[#6C894A] dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</a>
            </div>
        </div>
        <div class="block w-full overflow-x-auto border border-gray-200">
        <table class="items-center w-full bg-transparent border-collapse">
            <thead>
            <tr>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">No</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">Tanggal</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">Setor Id</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold text-left">Harga</th>
            </tr>
            </thead>
            <tbody>
            @php $i=1 @endphp
            @forelse ($order as $item)
                <tr class="text-gray-700 dark:text-gray-100">
                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">{{$i++}}</td>
                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">order-{{substr($item->id,0,6)}}</td>
                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Rp {{number_format($item->pembayaran->total,2,',','.')}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class = "text-center text-xs text-gray-600 p-4">
                        Tidak ada transaksi
                    </td> 
                </tr>
            @endforelse
            
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection 
