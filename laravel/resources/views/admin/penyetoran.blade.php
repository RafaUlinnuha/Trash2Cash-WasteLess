@extends('layouts.base')
 
@section('title', 'Status Penyetoran | ')
 
@section('content')
<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Status Penyetoran</h1>
<div class="block w-full overflow-x-auto border border-gray-200 mt-8">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">
                <div class="flex justify-center">
                    @sortablelink('updated_at', 'Tanggal')
                    <div><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg>
                    </div>
                </div>
            </th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Setor Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Bank Sampah</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Anggota Bank Sampah</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Harga</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">rincian</th>
        </tr>
        </thead>
        <tbody>
        @forelse($sampah as $item)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">setor-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$item->bankUser->nama}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$item->anggotaUser->nama}}</td>
            @php
            $harga = 0;
            foreach($item->itemSampah as $it){
                $harga+=$it->jumlah*$it->hargasatuan;
            }
            @endphp
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Rp {{number_format($harga,2,',','.')}}</td>
            <td class="px-3 py-4 flex justify-center">
                <a href="{{route('admin.rincian-setor', $item->id)}}" class="font-medium">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z"/>
                    <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z"/>
                </svg>
                </a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="5" class = "text-center text-xs text-gray-600 p-4">
                    Tidak ada penyetoran
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div>  
<div class="col-md-12">
    {{ $sampah->links('pagination::tailwind') }}
</div>
@endsection 