@extends('layouts.base')
 
@section('title', 'Status Order | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Status Order</h1>
<div x-data="{ tab: '#tab1' }" class="mt-4">

  <div class="flex flex-row justify-between border-b-2 border-gray-900">

    <a class="p-4 font-medium"
      href="#" x-on:click.prevent="tab='#tab1'">Semua</a>
      
    <a class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='#tab2'">Belum Bayar</a>
      
    <a class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='#tab3'">Diproses</a>

    <a class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='#tab4'">Dikirim</a>
      
    <a class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='#tab5'">Selesai</a>
      
    <a class="p-4 font-medium" 
      href="#" x-on:click.prevent="tab='#tab6'">Dibatalkan</a>
      
  </div>
  <div x-show="tab == '#tab1'" x-cloak>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
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
  
  <div x-show="tab == '#tab2'" x-cloak>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          <th scope="col" class="px-6 py-3 font-medium">Bukti Bayar</th>
          <th colspan="2" class="px-6 py-3 font-medium">Aksi</th>
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
          <td class="px-6 py-3">
              <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
        
      </tbody>
    </table>
  </div>
  
  <div x-show="tab == '#tab3'" x-cloak>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          <th colspan="2" class="px-6 py-3 font-medium">Aksi</th>
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
          <td class="px-6 py-3">
              <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div x-show="tab == '#tab4'" x-cloak>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          <th colspan="2" class="px-6 py-3 font-medium">Aksi</th>
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
          <td class="px-6 py-3">
              <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

<div x-show="tab == '#tab5'" x-cloak>
  <table class="mt-12 w-full border-2 py-8 px-12 shadow">
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

<div x-show="tab == '#tab6'" x-cloak><table class="mt-12 w-full border-2 py-8 px-12 shadow">
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