@extends('layouts.base')
 
@section('title', 'Edit Profil | ')
 
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
            <li class="inline-flex items-center">
                <a href={{route('profil.view')}} class="flex items-center">
                    <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 dark:text-gray-400">Profil</span>
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Ubah Profil</span>
                </div>
            </li>
        </ol>
    </nav>
    <h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Ubah Profil</h1>
    <div class="foto items-center flex flex-col mt-8 md:mt-0 space-y-8">
        @php
            $user = Auth::user();
        @endphp
        @if($user->foto_profil == null)
        <!-- kalau gaada foto profil -->
        <span class="i-bi-people-circle w-32 h-32 md:w-48 md:h-48"></span>
        @else
        <!-- kl ada foto profil -->
        <img src="{{asset('storage/foto_user/'.$user->foto_profil)}}" alt="" class="w-32 h-32 md:w-48 md:h-48 rounded-full">
        @endif
        {{-- <button class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50">Ubah Foto</button> --}}
        <!-- Modal toggle -->
        @include('user.modal.modal-edit-foto')
    </div>
    <div class="grid md:grid-cols-2 mt-12 gap-12">
        <div class="data border-2 md:py-8 p-6 md:px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Data Pribadi</h1>
            <hr class="mt-2">
            <form action="{{route('user.update')}}" method="post">
            @csrf
            <div class="space-y-4 mt-4">
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                    <div class="md:w-1/3 md:text-lg">Nama</div>
                    <div class="md:w-2/3">
                        <input name="nama" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->nama}}">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                    <div class="md:w-1/3 md:text-lg">No Telepon</div>
                    <div class="md:w-2/3">
                        <input name="no_hp" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->no_hp}}">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0n">
                    <div class="md:w-1/3 md:text-lg">Email</div>
                    <div class="md:w-2/3">
                        <input name="email" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="email" value="{{$user->email}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-2xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
        <div class="data border-2 md:py-8 p-6 md:px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Kata Sandi</h1>
            <hr class="mt-2">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
            <form action="{{route('katasandi.update')}}" method="post">
                @csrf
                <div class="space-y-4 mt-4">
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Kata Sandi Lama</div>
                        <div class="md:w-2/3">
                            <input type="password" name="current_password" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Kata Sandi Baru</div>
                        <div class="md:w-2/3">
                            <input type="password" name="new_password" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Konfirmasi Kata Sandi Baru</div>
                        <div class="md:w-2/3">
                            <input type="password" name="new_password_confirm" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text">
                        </div>
                    </div>
                </div>
                <button type= "submit" class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
    </div>
    <div class="grid md:grid-cols-2 mt-12 gap-12">
        <div class="data border-2 md:py-8 p-6 md:px-12 shadow">
            <h1 class="text-2xl font-medium">Tambah Rekening Bank</h1>
            <hr class="mt-2">
            <form action="{{route('rekening.store')}}" method="post">
            @csrf
            <div class="space-y-4 mt-4">
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                    <div class="md:w-1/3 md:text-lg">No Rekening</div>
                    <div class="md:w-2/3">
                        <input name="no_rek" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                    <div class="md:w-1/3 md:text-lg">Nama Bank</div>
                    <div class="md:w-2/3">
                        <input name="nama_metode" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                    <div class="md:w-1/3 md:text-lg">Nama Pemilik Rekening</div>
                    <div class="md:w-2/3">
                        <input name="atas_nama" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
        <div class="data border-2 md:py-8 p-6 md:px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Alamat</h1>
            <hr class="mt-2">
            <form action="{{route('alamat.update')}}" method="post">
            @csrf
            <div class="space-y-4 mt-4">
                <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                    <div class="md:w-1/3 md:text-lg">Alamat</div>
                    <div class="md:w-2/3">
                        <input name="alamat" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->alamatUser->alamat}}">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-2">
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Kecamatan</div>
                        <div class="md:w-2/3">
                            <input name="kecamatan" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->alamatUser->kecamatan}}">
                        </div>                    
                    </div>
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Kota</div>
                        <div class="md:w-2/3">
                            <input name="kota" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->alamatUser->kota}}">
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-2">
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Provinsi</div>
                        <div class="md:w-2/3">
                            <input name="provinsi" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->alamatUser->provinsi}}">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between md:items-center space-y-2 md:space-y-0">
                        <div class="md:w-1/3 md:text-lg">Kode Pos</div>
                        <div class="md:w-2/3">
                            <input name="kode_pos" class="h-10 w-full px-3 border rounded-lg border-gray-300 text-sm md:text-base" type="text" value="{{$user->alamatUser->kode_pos}}">
                        </div>
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
    </div>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
        <thead>
          <tr class="bg-white border-b text-sm md:text-xl">
            <th scope="col" class="px-6 font-medium hidden md:table-cell">No</th>
            <th scope="col" class="px-3 md:px-6 py-3 font-medium">No Rekening</th>
            <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Nama Bank</th>
            <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Nama Pemilik Rekening</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
        @foreach($user->metodePembayaran as $rekening)
        <?php $i++ ?>
          <tr class="bg-white border-b text-xs md:text-base">
            <td class="px-6 py-3 hidden md:table-cell">{{$i}}</td>
            <td class="px-3 md:px-6 py-3">{{$rekening->no_rek}}</td>
            <td class="px-6 py-3 hidden md:table-cell">{{$rekening->nama_metode}}</td>
            <td class="px-6 py-3 hidden md:table-cell">{{$rekening->atas_nama}}</td>
            <td>
                @include('user.modal.modal-editrekening')
            </td>
            <td>
                @include('user.modal.modal-hapusrekening')
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection 