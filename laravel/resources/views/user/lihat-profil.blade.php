@extends('layouts.base')
 
@section('title', 'Lihat Profil | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Profil</h1>
<div class="grid xl:grid-cols-2 lg:grid-cols-1 space-y-8 xl:space-y-0">
    <div class="foto items-center flex flex-col space-y-8">
        <span class="i-bi-people-circle w-48 h-48"></span>
        <button class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50">Ubah Profil</button>
    </div>
    <div class="data border-2 py-8 px-12 shadow rounded-lg">
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <div class="w-1/3 text-lg">Nama</div>
                <div class="w-2/3">
                    <input disabled class="h-10 w-full px-3 placeholder-gray-600 border rounded-lg" type="text" placeholder="Nama sebelumnya">
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="w-1/3 text-lg">No Telepon</div>
                <div class="w-2/3">
                    <input disabled class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg" type="text" placeholder="No telepon sebelumnya">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/3 text-lg items-start">Email</div>
                <div class="w-2/3">
                    <input disabled class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg" type="email" placeholder="Email sebelumnya">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/3 text-lg items-start">Alamat</div>
                <div class="w-2/3">
                    <textarea disabled rows="4" class="w-full px-3 pt-2 text-base placeholder-gray-600 border rounded-lg " name="alamat" id="alamat" placeholder="Alamat sebelumnya"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="mt-12 w-full border-2 py-8 px-12 shadow">
    <thead>
      <tr class="bg-white border-b text-xl">
        <th scope="col" class="px-6 py-3 font-medium">No</th>
        <th scope="col" class="px-6 py-3 font-medium ">No Rekening</th>
        <th scope="col" class="px-6 py-3 font-medium">Nama Bank</th>
        <th scope="col" class="px-6 py-3 font-medium">Nama Pemilik Rekening</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-white border-b">
        <td class="px-6 py-3">1</td>
        <td class="px-6 py-3">02389433284</td>
        <td class="px-6 py-3">BNI</td>
        <td class="px-6 py-3">John Doe</td>
      </tr>
      <tr class="bg-white border-b">
        <td class="px-6 py-3">2</td>
        <td class="px-6 py-3">43559483413</td>
        <td class="px-6 py-3">BCA</td>
        <td class="px-6 py-3">Malcolm Lockyer</td>
      </tr>
    </tbody>
</table>
@endsection 