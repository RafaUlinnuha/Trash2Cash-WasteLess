@extends('layouts.base')
 
@section('title', 'Status Order | ')
 
@section('content')
<h1 class="text-4xl font-semibold">Status Order</h1>
<table class="mt-12 w-full border-2 py-8 px-12 shadow">
    <thead>
      <tr class="bg-white border-b text-xl">
        <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
        <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
        <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
        <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
        <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
        <th scope="col" class="px-6 py-3 font-medium">Status</th>
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