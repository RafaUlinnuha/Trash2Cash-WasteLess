@extends('layouts.base')
 
@section('title', 'Pembayaran | ')
 
@section('content')
    <div class="p-6 rounded-lg border border-gray-200 shadow">
        <h1 class="font-semibold text-xl">Alamat Pengiriman</h1>
        <div class="flex flex-wrap justify-between mt-2">
            <div class="font-medium">
                <h2>PT. Indo Jaya</h2>
                <h3>083182347234</h3>
            </div>
            <h4>Cipadung, Kecamatan Cibiru, Kota Bandung, Jawa Barat, 40614</h4>
            <a href="" class="px-6 py-2 font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 mb-auto xl:mt-0 mt-4">
                Ubah Alamat
             </a>
        </div>
    </div>
    <div class="p-6 rounded-lg border border-gray-200 shadow mt-8">
        <h1 class="font-semibold text-xl">Produk Dipesan</h1>
        <div class="flex space-x-4 items-center mt-2">
            <span class="i-material-symbols-account-circle w-8 h-8"></span>
            <h1 class="font-semibold text-[#FF8833]">Anti Sampah</h1>
        </div>
        <div class="flex flex-wrap justify-between mt-4">
            <div class="flex space-x-6">
                <img src="{{ asset('img/marketplace/produk-2.png') }}" class="rounded-xl w-[30%]">
                <div class="flex-rows">
                    <h1>Sampah Kertas Koran</h1>
                    <h2>10 kg</h2>
                </div>
            </div>
            <h2>Rp 50.000,-</h2>
        </div>
        <hr class="my-6">
        <h3 class="text-right">Total Pesanan : Rp 50.000,-</h3>
    </div>
    <div class="p-6 rounded-lg border border-gray-200 shadow mt-8">
        <h1 class="font-semibold text-xl">Pembayaran</h1>
       
        <div class="grid grid-cols-3 mt-4">
            <div class="col-span-2 flex-row space-y-3">
                <h1>Bank Mandiri : 19286731 a.n WasteLess</h1>
                <h1>Bank BCA : 3712490013 a.n WasteLess</h1>
                <h1>Bank BNI : 1010244231 a.n WasteLess</h1>
            </div>
            <div class="flex-rows">
                <h1>Total Biaya</h1>
                <h2 class="font-semibold">Rp 50.000,-</h2>
            </div>
        </div>
        <hr class="my-6">
        <h3 class="text-right">Total Pesanan : Rp 50.000,-</h3>
    </div>
    <div class="mt-8 text-right">
        <a href="" class="px-10 py-2 font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300">
            Bayar Sekarang
         </a>
    </div>
@endsection 