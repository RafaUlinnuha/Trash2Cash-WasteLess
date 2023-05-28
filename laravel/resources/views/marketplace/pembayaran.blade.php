@extends('layouts.base')
 
@section('title', 'Pembayaran | ')
 
@section('content')
    @php($itemKeranjang = session('itemKeranjang'))
    <div class="p-6 rounded-lg border border-gray-200 shadow">
        <h1 class="font-semibold text-xl row">Alamat Pengiriman</h1>
        <div class="flex flex-wrap justify-between mt-2 grid grid-rows-1 grid-flow-col gap-4">
            <div class="row font-medium">
                <?php 
                $user = Auth::user();
                ?>
                <h2>{{$user->nama}}</h2>
                <h3>{{$user->no_hp}}</h3>
            </div>
            <div class="row">
                @if($user->alamatUser->alamat)
                <h4>{{$user->alamatUser->alamat}}, Kecamatan {{$user->alamatUser->kecamatan}}, Kota {{$user->alamatUser->kota}}, {{$user->alamatUser->provinsi}}, {{$user->alamatUser->kode_pos}}</h4>
                @else
                <h4 class="text-red-600">Tambahkan alamat terlebih dahulu!</h4>
                @endif
            </div>
            <div class="row">
                <button data-modal-target="ubahalamat-modal" data-modal-toggle="ubahalamat-modal" class="px-6 py-2 my-auto font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 xl:mt-0" type="button">
                    {{$user->alamatUser->alamat? 'Ubah Alamat' : 'Tambah Alamat'}}
                </button>
            </div>
            
        </div>
    </div>
    <div class="p-6 rounded-lg border border-gray-200 shadow mt-8">
        <h1 class="font-semibold text-xl">Produk Dipesan</h1>
        <?php $jumlah = 0; ?>
        @foreach($itemKeranjang as $item)
        <div class="flex space-x-4 items-center mt-2">
            <span class="i-material-symbols-account-circle w-8 h-8"></span>
            <h1 class="font-semibold text-[#FF8833]">{{$item->produk->user->nama}}</h1>
        </div>
        <div class="flex justify-between mt-4">
            <div class="flex space-x-6 w-3/4">

                <img src="{{asset('storage/'.$item->produk->gambar)}}" class="rounded-xl w-48 h-32">

                <div class="flex-rows flex-wrap w-2/3">
                    <h1>{{$item->produk->nama}}</h1>
                    <h2>{{$item->jumlah}} kg</h2>
                </div>
            </div>
            <h2>Rp {{number_format($item->jumlah*$item->produk->harga,2,',','.')}}</h2>
        </div>
        <?php $jumlah += $item->jumlah*$item->produk->harga; ?>
        @endforeach
        <hr class="my-6">
        <h3 class="text-right">Total Pesanan : Rp {{number_format($jumlah,2,',','.')}}</h3>
    </div>
    <div class="p-6 rounded-lg border border-gray-200 shadow mt-8">
        <h1 class="font-semibold text-xl">Pembayaran</h1>
        <div class="grid grid-cols-3 mt-4">
            <div class="col-span-2 flex-row space-y-3">
                @foreach($user->metodePembayaran as $rekening)
                <h1>{{$rekening->nama_metode}} : {{$rekening->no_rek}} a.n {{$rekening->atas_nama}}</h1>
                @endforeach
            </div>       
            <div class="flex-rows">
                <h1>Total Biaya</h1>
                <h2 class="font-semibold">Rp {{number_format($jumlah,2,',','.')}}</h2>
            </div>
        </div>
        <hr class="my-6">
        <h3 class="text-right">Total Pesanan : Rp {{number_format($jumlah,2,',','.')}}</h3>
    </div>
    <div class="mt-8 text-right">
        <button onclick="window.location.href='{{route('checkout', $itemKeranjang)}}'" class="px-10 py-2 font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300" {{ $user->alamatUser->alamat ? '' : 'disabled'}}>
            Bayar Sekarang
         </button>
    </div>
@endsection

    @include('marketplace.modal.modal-ubahAlamat')
