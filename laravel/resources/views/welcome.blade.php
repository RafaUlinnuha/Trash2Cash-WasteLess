@extends('layouts')
 
@section('title', '')
 
@section('content')
<div class="px-32 mx-auto">
    <div class="about flex flex-col lg:flex-row lg:space-x-24 items-center">
        <img src="{{ asset('img/about.jpg') }}" class="w-0 lg:w-[550]">
        <div class="about-text flex flex-wrap">
            <h1 class="text-4xl text-[#FF8833] font-semibold">WasteLess</h1>
            <p class="mt-4 mb-10 lg:text-lg">Platform untuk masyarakat Indonesia melakukan jual beli sampah agar dapat membantu rumah tangga dan industri dalam masalah pengelolaan sampah.</p>
            <a href="#" class="py-3 px-8 text-center text-lg bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-3xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                Mari Bergabung 
             </a>
        </div>
    </div>
    {{-- <span class="block bg-black h-[2px] w-full rounded my-16"></span> --}}
    <div class="layanan mt-24">
        <h1 class="text-4xl font-semibold">Layanan</h1>
        <div class="grid lg:grid-cols-3 gap-16">
            <div class="pendataan">
                <div class="mt-8 flex flex-wrap max-w-sm h-80 pb-12 px-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <div class="flex items-end space-x-3">
                        <img src="{{ asset('img/icon pendataan.png') }}" class="w-10">
                        <h1 class="md:text-xl lg:text-2xl">Pendataan</h1>
                    </div>
                    <p class="mt-6 font-thin">Sampah yang kamu punya dapat didata dengan mengkategorikannya disini.</p>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Kunjungi
                    </a>
                </div>
            </div>
            
            <div class="marketplace">
                <div class="mt-8 flex flex-wrap max-w-sm h-80 pb-12 px-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <div class="flex items-end space-x-3">
                        <img src="{{ asset('img/icon marketplace.png') }}" class="w-10">
                        <h1 class="md:text-xl lg:text-2xl">Marketplace</h1>
                    </div>
                    <p class="mt-6 font-thin">Tempat untuk kamu melakukan transaksi sampah yang belum diolah dan sudah diolah.</p>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Kunjungi
                    </a>
                </div>
            </div>
            <div class="pendapatan">
                <div class="mt-8 flex flex-wrap max-w-sm h-80 pb-12 px-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <div class="flex items-end space-x-3">
                        <img src="{{ asset('img/icon pendapatan.png') }}" class="w-10">
                        <h1 class="md:text-xl lg:text-2xl">Pendapatan</h1>
                    </div>
                    <p class="mt-6 font-thin">Hasil dari penjualan yang telah kamu dapatkan pada marketplace dapat kamu lihat dan kelola disini.</p>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Kunjungi
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- <span class="block bg-black h-[1.5px] w-full rounded my-16"></span> --}}
    <div class="jenis-sampah mt-24">
        <h1 class="text-4xl font-semibold text-right">Jenis Sampah</h1>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <div class="plastik">
                <div class="my-8 flex flex-wrap items-center max-w-sm h-full p-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/plastic.png') }}" class="mx-auto w-48">
                    <h1 class="text-2xl mx-auto">Plastik</h1>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Cari Tahu
                    </a>
                </div>
            </div>
            <div class="kaca-kaleng">
                <div class="my-8 flex flex-wrap items-center max-w-sm h-full p-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/glass.png') }}" class="mx-auto w-48">
                    <h1 class="text-2xl mx-auto">Kaca & Kaleng</h1>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Cari Tahu
                    </a>
                </div>
            </div>
            <div class="elektronik">
                <div class="my-8 flex flex-wrap items-center max-w-sm h-full p-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/electronic.png') }}" class="mx-auto w-48">
                    <h1 class="text-2xl mx-auto">Elektronik</h1>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Cari Tahu
                    </a>
                </div>
            </div>
            <div class="kertas">
                <div class="my-8 flex flex-wrap items-center max-w-sm h-full p-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300">
                    <img src="{{ asset('img/paper.png') }}" class="mx-auto w-48">
                    <h1 class="text-2xl mx-auto">Kertas</h1>
                    <a href="#" class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
                       Cari Tahu
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection