@extends('layouts.base')
 
@section('title', 'Edit Profil | ')
 
@section('content')
    <h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Ubah Profil</h1>
    <div class="foto items-center flex flex-col mt-8 md:mt-0 space-y-8">
        <span class="i-bi-people-circle w-32 h-32 md:w-48 md:h-48"></span>
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
            <h1 class="text-2xl font-medium">Ubah Data Pribadi</h1>
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