@extends('layouts')
 
@section('title', 'Edit Profil | ')
 
@section('content')
    <h1 class="text-4xl font-semibold">Profilku</h1>
    <div class="foto items-center flex flex-col space-y-8">
        <span class="i-bi-people-circle w-48 h-48"></span>
        <button class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50">Ubah Foto</button>
    </div>
    <div class="grid grid-cols-2 mt-12 gap-12">
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Data Pribadi</h1>
            <hr class="mt-2">
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">Nama</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 placeholder-gray-600 border rounded-lg " type="text" placeholder="Nama sebelumnya">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">No Telepon</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg " type="text" placeholder="No telepon sebelumnya">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">Alamat</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg " type="text" placeholder="Alamat sebelumnya">
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-2xl transition ease-in-out delay-150 duration-300">Simpan</button>
        </div>
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Kata Sandi</h1>
            <hr class="mt-2">
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Kata Sandi Lama</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 border rounded-lg " type="text">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Kata Sandi Baru</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base border rounded-lg " type="text">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Konfirmasi Kata Sandi</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base border rounded-lg " type="text">
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
        </div>
    </div>
 
    
@endsection 