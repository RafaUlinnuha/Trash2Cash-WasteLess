@extends('layouts.base')
 
@section('title', 'Status Order | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Status Order</h1>

<div x-data="{ current: 1 }">
  <div class="flex overflow-hidden border-b-2 mt-8">
    <button class="p-2 w-full" x-on:click="current = 1"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 1 }">Semua</button>
    <button class="p-2 w-full" x-on:click="current = 2"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 2 }">Belum Bayar</button>
    <button class="p-2 w-full" x-on:click="current = 3"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 3 }">Diproses</button>
        <button class="p-2 w-full" x-on:click="current = 4"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 4 }">Dikirim</button>
    <button class="p-2 w-full" x-on:click="current = 5"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 5 }">Selesai</button>
    <button class="p-2 w-full" x-on:click="current = 6"
        x-bind:class="{ 'bg-[#FF8833] text-white rounded': current === 6 }">Dibatalkan</button>    
  </div>
  <div x-show="current === 1" class="p-3 text-center mt-4">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          <th scope="col" class="px-6 py-3 font-medium">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border text-center">
          <td class="px-3 py-3">1</td>
          <td class="px-6 py-3">12/02/2023</td>
          <td class="px-6 py-3">00012</td>
          <td class="px-6 py-3">John Doe</td>
          <td class="px-6 py-3">Kec. Padalarang</td>
          <td class="px-6 py-3">Rp 2.000</td>
          <td class="px-6 py-3">Belum Bayar</td>
        </tr>
        <tr class="border text-center">
          <td class="px-3 py-3">2</td>
          <td class="px-6 py-3">19/02/2023</td>
          <td class="px-6 py-3">00013</td>
          <td class="px-6 py-3">John Doe</td>
          <td class="px-6 py-3">Kab. Sumedang</td>
          <td class="px-6 py-3">Rp 6.000</td>
          <td class="px-6 py-3">Diproses</td>
        </tr>
        <tr class="border text-center">
          <td class="px-3 py-3">3</td>
          <td class="px-6 py-3">23/02/2023</td>
          <td class="px-6 py-3">00014</td>
          <td class="px-6 py-3">Nanda Rai</td>
          <td class="px-6 py-3">Kota Bandung</td>
          <td class="px-6 py-3">Rp 2.000</td>
          <td class="px-6 py-3">Dikirim</td>
        </tr>
        <tr class="border text-center">
          <td class="px-3 py-3">4</td>
          <td class="px-6 py-3">07/03/2023</td>
          <td class="px-6 py-3">00015</td>
          <td class="px-6 py-3">Rosita Dewi</td>
          <td class="px-6 py-3">Kec. Cibiru</td>
          <td class="px-6 py-3">Rp 5.000</td>
          <td class="px-6 py-3">Selesai</td>
        </tr>
        <tr class="border text-center">
          <td class="px-3 py-3">5</td>
          <td class="px-6 py-3">14/03/2023</td>
          <td class="px-6 py-3">00016</td>
          <td class="px-6 py-3">Rafa Azka</td>
          <td class="px-6 py-3">Kota Bandung</td>
          <td class="px-6 py-3">Rp 6.000</td>
          <td class="px-6 py-3">Dibatalkan</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div x-show="current === 2" class="p-3 text-center mt-4">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          <th scope="col" class="px-6 py-3 font-medium">Bukti Bayar</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border text-center">
          <td class="px-3 py-3">1</td>
          <td class="px-6 py-3">12/02/2023</td>
          <td class="px-6 py-3">00012</td>
          <td class="px-6 py-3">John Doe</td>
          <td class="px-6 py-3">Kec. Padalarang</td>
          <td class="px-6 py-3">Rp 2.000</td>
          <td class="px-6 py-3"><button class="items-center py-2 px-4 bg-[#8092C1] text-neutral-50 rounded-lg">Unduh File</button></td>
          <td class="px-6 py-3">
            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div x-show="current === 3" class="p-3 text-center mt-4">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border text-center">
          <td class="px-3 py-3">1</td>
          <td class="px-6 py-3">19/02/2023</td>
          <td class="px-6 py-3">00013</td>
          <td class="px-6 py-3">John Doe</td>
          <td class="px-6 py-3">Kab. Sumedang</td>
          <td class="px-6 py-3">Rp 6.000</td>
          <td class="px-6 py-3">
            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div x-show="current === 4" class="p-3 text-center mt-4">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border text-center">
          <td class="px-3 py-3">1</td>
          <td class="px-6 py-3">23/02/2023</td>
          <td class="px-6 py-3">00014</td>
          <td class="px-6 py-3">Nanda Rai</td>
          <td class="px-6 py-3">Kota Bandung</td>
          <td class="px-6 py-3">Rp 2.000</td>
          <td class="px-6 py-3">
            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
          </td>
        </tr>
      </tbody>
    </table>
</div>
<div x-show="current === 5" class="p-3 text-center mt-4">
  <table class="w-full border-2 py-8 px-12 shadow">
    <thead>
      <tr class="border text-base">
        <th scope="col" class="px-3 py-3 font-medium">No</th>
        <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
        <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
        <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
        <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
        <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
      </tr>
    </thead>
    <tbody>
      <tr class="border text-center">
        <td class="px-3 py-3">1</td>
        <td class="px-6 py-3">07/03/2023</td>
        <td class="px-6 py-3">00015</td>
        <td class="px-6 py-3">Rosita Dewi</td>
        <td class="px-6 py-3">Kec. Cibiru</td>
        <td class="px-6 py-3">Rp 5.000</td>
      </tr>
    </tbody>
  </table>
</div>
<div x-show="current === 6" class="p-3 text-center mt-4">
    <table class="w-full border-2 py-8 px-12 shadow">
    <thead>
      <tr class="border text-base">
        <th scope="col" class="px-3 py-3 font-medium">No</th>
        <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
        <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
        <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
        <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
        <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
      </tr>
    </thead>
    <tbody>
      <tr class="border text-center">
        <td class="px-3 py-3">1</td>
        <td class="px-6 py-3">14/03/2023</td>
        <td class="px-6 py-3">00016</td>
        <td class="px-6 py-3">Rafa Azka</td>
        <td class="px-6 py-3">Kota Bandung</td>
        <td class="px-6 py-3">Rp 6.000</td>
      </tr>
    </tbody>
    </table>
  </div>
</div>
  
@endsection 