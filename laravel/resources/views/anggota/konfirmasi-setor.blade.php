@extends('layouts.base')
 
@section('title', 'Konfirmasi Penyetoran | ')
 
@section('content')
    <div class="p-4 md:p-6 rounded-lg border border-gray-200 shadow">
        <h1 class="font-semibold text-sm md:text-base row">Alamat Penjemputan</h1>
        <div class="mt-2 grid grid-rows-3 md:grid-rows-1 grid-flow-col md:gap-4 text-sm md:text-base">
            <div class="row font-medium text-xs md:text-sm my-auto md:my-0">
                <?php 
                $user = Auth::user();
                ?>
                <h2>{{$user->nama}}</h2>
                <h3>{{$user->no_hp}}</h3>
            </div>
            <div class="row">
                @if($user->alamatUser->alamat)
                <h4 class="text-xs md:text-sm">{{$user->alamatUser->alamat}}, Kecamatan {{$user->alamatUser->kecamatan}}, Kota {{$user->alamatUser->kota}}, {{$user->alamatUser->provinsi}}, {{$user->alamatUser->kode_pos}}</h4>
                @else
                <h4 class="text-red-600 text-xs md:text-sm">Tambahkan alamat terlebih dahulu!</h4>
                @endif
            </div>
            <!-- <div class="row mt-4 md:mt-0">
                <button data-modal-target="ubahalamat-modal" data-modal-toggle="ubahalamat-modal" class="px-6 py-2 my-auto font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 xl:mt-0" type="button">
                    {{$user->alamatUser->alamat? 'Ubah Alamat' : 'Tambah Alamat'}}
                </button>
            </div> -->
            
        </div>
    </div>
    <div class="p-6 rounded-lg border border-gray-200 shadow mt-4 md:mt-8 text-sm md:text-base">
        <h1 class="font-semibold text-sm md:text-base">Sampah yang Disetorkan</h1>
        @php $harga = 0 @endphp
        @foreach($sampah->itemSampah as $item)
        <div class="flex flex-col md:flex-row md:justify-between mt-4 space-y-2">
            <div class="flex flex-col md:flex-row md:space-x-6 md:w-3/4">
                <img src="{{asset('storage/'.$item->kategoriSampah->gambar)}}" class="rounded-xl w-32 h-32 hidden md:block">
                <div class="md:flex-rows flex-wrap md:w-2/3 mt-2 md:mt-0 space-y-1 md:space-y-0 text-xs md:text-sm">
                    <table>
                        <tr><td>
                            <h1 class=" font-semibold">{{$item->nama_jenis}}</h1>
                        </td> </tr>
                        <tr>
                            <td>
                                <h1 class="">Ketegori</h1>
                            </td> 
                            <td>
                                <h1 class="">: {{$item->kategoriSampah->nama}}</h1>
                            </td> 
                        </tr>
                        <tr class="">
                            <td>
                                <h1 class=" hidden md:table-cell">Deskripsi</h1>
                            </td> 
                            <td>
                                <h1 class=" hidden md:table-cell" >:  {{$item->deskripsi == null? '-': $item->deskripsi}}</h1>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <h1 class="">Jumlah</h1>
                            </td> 
                            <td>
                                <h1 class="">: {{$item->jumlah}} Kg</h1>
                            </td> 
                        </tr>
                    </table>
                </div>
            </div>
            @php $harga += $item->hargasatuan*$item->jumlah @endphp
            <h2 class="text-end text-xs md:text-sm">Rp {{number_format($item->hargasatuan*$item->jumlah,2,',','.')}}</h2>
            <hr>
        </div>
        @endforeach
        <hr>
        <h3 class="my-2 text-right font-medium text-xs md:text-sm">Estimasi Pendapatan : Rp {{number_format($harga,2,',','.')}}</h3>
    </div>
    <form class ="" action="{{route('setor.post', $sampah->id)}}" method="post">    
    @csrf
    <div class="p-6 rounded-lg border border-gray-200 shadow mt-4 md:mt-8 text-sm md:text-base">
        <h1 class="font-semibold text-sm md:text-base">Informasi Penjemputan</h1>
        <div class="mt-4 space-y-2">
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                <label for="kategori" class="text-xs md:text-sm block mb-2 font-medium text-gray-500 dark:text-white">Bank Sampah yang dituju</label>
                    <select name="bank" class="text-xs md:text-sm block py-2.5 px-0 w-full text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        @foreach($bank as $banksampah)
                        <option value="{{$banksampah->id}}">{{$banksampah->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="kategori" class="text-xs md:text-sm block mb-2 font-medium text-gray-500 dark:text-white">Tanggal Penjemputan</label>
                    <input type="date" name="tanggal" min="{{ date('Y-m-d', strtotime('+1 day')) }}" class="block py-2.5 px-0 w-full text-xs md:text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                <label for="kategori" class="text-xs md:text-sm block mb-2 font-medium text-gray-500 dark:text-white">Waktu Penjemputan</label>
                    <select name="waktu" class=" text-xs md:text-sm block py-2.5 px-0 w-full text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option value="08:00 - 10:00">08:00 - 10:00 WIB</option>
                        <option value="10:00 - 12:00">10:00 - 12:00 WIB</option>
                        <option value="12:00 - 14:00">12:00 - 14:00 WIB</option>
                        <option value="14:00 - 16:00">14:00 - 16:00 WIB</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 text-right text-sm md:text-base w-full">
        <button type="submit" class="md:px-10 py-3 font-medium text-center bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 w-full" {{ $user->alamatUser->alamat ? '' : 'disabled'}}>
            Konfirmasi Penyetoran
         </button>
    </div>
    </form>

@endsection