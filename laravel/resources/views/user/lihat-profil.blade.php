@extends('layouts.base')
 
@section('title', 'Lihat Profil | ')
 
@section('content')
<nav class="flex mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            @if($user->role=='bank_sampah')
            <a href="{{route('bank-status')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Home
            </a>
            @elseif($user->role=='anggota')
            <a href="{{route('anggota-home')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Home
            </a>
            @elseif($user->role=='pembeli')
            <a href="{{route('home-page')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Marketplace
            </a>
            @else
            <a href="{{route('admin.dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Home
            </a>
            @endif
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Profil</span>
            </div>
        </li>
    </ol>
</nav>
<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Profil</h1>
<div class="grid xl:grid-cols-2 lg:grid-cols-1 mt-8 md:mt-0 space-y-6 md:space-y-8 xl:space-y-0">
    <div class="foto items-center flex flex-col space-y-8">
        @if($user->foto_profil == null)
        <!-- if gaada foto profil -->
        <span class="i-bi-people-circle w-32 h-32 md:w-48 md:h-48"></span>
        @else
        <!-- kl ada foto profil -->
        <img src="{{asset('storage/foto_user/'.$user->foto_profil)}}" alt="" class="w-32 h-32 md:w-48 md:h-48 rounded-full">
        @endif
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