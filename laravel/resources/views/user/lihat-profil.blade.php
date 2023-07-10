@extends('layouts.base')
 
@section('title', 'Lihat Profil | ')
 
@section('content')
<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Profil</h1>
<div class="grid xl:grid-cols-2 lg:grid-cols-1 mt-8 md:mt-0 space-y-6 md:space-y-8 xl:space-y-0">
    <div class="foto items-center flex flex-col space-y-8">
          <!-- if gaada foto profil -->
        {{-- <span class="i-bi-people-circle w-32 h-32 md:w-48 md:h-48"></span> --}}
        <!-- kl ada foto profil -->
        <img src="{{ asset('img/sampah plastik.png') }}" alt="" class="w-32 h-32 md:w-48 md:h-48 rounded-full">
        <a href="{{route('profil.edit', $user->id)}}" class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50">Ubah Profil</a>
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
<table class="mt-12 w-full border-2 py-8 md:px-12 shadow">
    <thead>
      <tr class="bg-white border-b text-sm md:text-xl">
        <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">No</th>
        <th scope="col" class="px-3 md:px-6 py-3 font-medium ">No Rekening</th>
        <th scope="col" class="px-3 md:px-6 font-medium">Nama Bank</th>
        <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Nama Pemilik Rekening</th>
      </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
            @forelse ($user->metodePembayaran as $rekening)
                <tr class="bg-white border-b text-xs md:text-xl">
                    <td class="px-6 py-3 hidden md:table-cell">{{$i}}</td>
                    <td class="px-3 md:px-6 py-3">{{$rekening->no_rek}}</td>
                    <td class="px-3 md:px-6 py-3">{{$rekening->nama_metode}}</td>
                    <td class="px-6 py-3 hidden md:table-cell">{{$rekening->atas_nama}}</td>
                </tr>
        <?php $i++ ?>
        @empty
            <tr>
                <td colspan="4" class="px-6 py-3 text-center">Tidak ada rekening yang terdaftar</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection 