@extends('layouts.base')
 
@section('title', 'Edit Profil | ')
 
@section('content')
    <h1 class="text-4xl font-semibold">Ubah Profil</h1>
    <div class="foto items-center flex flex-col space-y-8">
        <span class="i-bi-people-circle w-48 h-48"></span>
        {{-- <button class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50">Ubah Foto</button> --}}
        <!-- Modal toggle -->
        @include('user.modal.modal-edit-foto')
    </div>
    <div class="grid grid-cols-2 mt-12 gap-12">
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Data Pribadi</h1>
            <hr class="mt-2">
            <form action="{{route('user.update')}}" method="post">
            @csrf
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">Nama</div>
                    <div class="w-2/3">
                        <input name="nama" class="h-10 w-full px-3 placeholder-gray-600 border rounded-lg border-gray-300" type="text" value="{{$user->nama}}">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">No Telepon</div>
                    <div class="w-2/3">
                        <input name="no_hp" class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg border-gray-300" type="text" value="{{$user->no_hp}}">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-1/3 text-lg items-start">Email</div>
                    <div class="w-2/3">
                        <input name="email" class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg border-gray-300" type="email" value="{{$user->email}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-2xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
        <div class="data border-2 py-8 px-12 shadow">
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
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kata Sandi Lama</div>
                        <div class="w-2/3">
                            <input type="password" name="current_password" class="h-10 w-full px-3 border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kata Sandi Baru</div>
                        <div class="w-2/3">
                            <input type="password" name="new_password" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Konfirmasi Kata Sandi</div>
                        <div class="w-2/3">
                            <input type="password" name="new_password_confirm" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                </div>
                <button type= "submit" class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-2 mt-12 gap-12">
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Tambah Rekening Bank</h1>
            <hr class="mt-2">
            <form action="{{route('rekening.store')}}" method="post">
            @csrf
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">No Rekening</div>
                    <div class="w-2/3">
                        <input name="no_rek" class="h-10 w-full px-3 border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Nama Bank</div>
                    <div class="w-2/3">
                        <input name="nama_metode" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Nama Pemilik Rekening</div>
                    <div class="w-2/3">
                        <input name="atas_nama" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Alamat</h1>
            <hr class="mt-2">
            <form action="{{route('alamat.update')}}" method="post">
            @csrf
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Alamat</div>
                    <div class="w-2/3">
                        <input name="alamat" class="h-10 w-full px-3 border rounded-lg border-gray-300" type="text" value="{{$user->alamatUser->alamat}}">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kecamatan</div>
                        <div class="w-2/3">
                            <input name="kecamatan" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text" value="{{$user->alamatUser->kecamatan}}">
                        </div>                    
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kota</div>
                        <div class="w-2/3">
                            <input name="kota" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text" value="{{$user->alamatUser->kota}}">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Provinsi</div>
                        <div class="w-2/3">
                            <input name="provinsi" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text" value="{{$user->alamatUser->provinsi}}">
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kode Pos</div>
                        <div class="w-2/3">
                            <input name="kode_pos" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text" value="{{$user->alamatUser->kode_pos}}">
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
          <tr class="bg-white border-b text-xl">
            <th scope="col" class="px-6 font-medium">No</th>
            <th scope="col" class="px-6 py-3 font-medium">No Rekening</th>
            <th scope="col" class="px-6 py-3 font-medium">Nama Bank</th>
            <th scope="col" class="px-6 py-3 font-medium">Nama Pemilik Rekening</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
        @foreach($user->metodePembayaran as $rekening)
        <?php $i++ ?>
          <tr class="bg-white border-b">
            <td class="px-6 py-3">{{$i}}</td>
            <td class="px-6 py-3">{{$rekening->no_rek}}</td>
            <td class="px-6 py-3">{{$rekening->nama_metode}}</td>
            <td class="px-6 py-3">{{$rekening->atas_nama}}</td>
            <td class="py-3">
                @include('user.modal.modal-editrekening')
            </td>
            <td class="py-3">
                @include('user.modal.modal-hapusrekening')
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection 