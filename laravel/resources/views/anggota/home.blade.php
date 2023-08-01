@extends('layouts.base')
 
@section('title', 'Home | ')
 
@section('content')
<div class="about flex flex-col lg:flex-row lg:space-x-16 xl:space-x-32 space-y-8 lg:space-y-0 items-center mt-8">
    <div class="about-text flex xl:flex-col flex-wrap">
        <h1 class="md:text-2xl lg:text-3xl text-[#FF8833] font-extrabold">Selamat Datang, {{Auth::user()->nama }}</h1>
        <p class="mt-4 mb-4 md:mb-10 text-justify text-xs md:text-base">Ayo bergabung dalam pengelolaan sampah yang lebih baik! Dengan setiap setoran sampah yang Anda berikan, Anda membantu mengurangi dampak negatif sampah terhadap lingkungan.</p>
        <a href="{{route('anggota-daur')}}" class="w-full py-1 md:py-2 lg:px-8 font-medium text-center text-sm md:text-base lg:text-lg bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-3xl transition ease-in-out delay-150  duration-300">
            Mulai Daur Ulang
        </a>
    </div>
</div>
<div class ="my-4">
    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 mt-8">
        <div class="my-2 text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-2 md:space-y-4">
            <h1 class="text-sm md:text-xl font-medium">Total Pendapatan Keseluruhan</h1>
            <p class="text-xs md:text-lg text-[#FF8833]">Rp {{number_format($pendapatan['totalsemua'],2,',','.')}}</p>
        </div>
        <div class="my-2 text-center items-center p-4 md:p-8 border border-gray-200 rounded-lg shadow-md space-y-2 md:space-y-4">
            <h1 class="text-sm md:text-xl font-medium">Total Daur Ulang Sampah</h1>
            <p class="text-xs md:text-lg text-[#FF8833]">{{$pendapatan['totalkg']}} kg</p>
        </div>
        <div class="md:col-span-2 overflow-x-auto text-xs md:text-sm ">
            <table class="my-2 w-full border border-gray-200 rounded-lg py-8 px-12 shadow">
                <thead>
                    <tr class="border">
                        <th scope="col" class="md:px-3 py-3 font-medium">No</th>
                        <th scope="col" class="px-3 py-3 font-medium hidden sm:table-cell">Tanggal</th>
                        <th scope="col" class="px-3 py-3 font-medium">Nama Barang</th>
                        <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell sm:table-cell ">Kategori</th>
                        <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell sm:table-cell">Jumlah</th>
                        <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell sm:table-cell">Total (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach($sampah as $items)
                        @foreach($items->itemSampah as $item)
                        <tr class="border text-center">
                            <td class="px-3 py-3">{{$i}}</td>
                            <td class="px-3 py-3 hidden sm:table-cell">{{ \Carbon\Carbon::parse($items->created_at)->format('d/m/Y') }}</td>
                            <td class="px-3 py-3">{{$item->nama_jenis}}</td>
                            <td class="px-3 py-3 hidden sm:table-cell md:table-celll">{{$item->KategoriSampah->nama}} </td>
                            <td class="px-3 py-3 hidden sm:table-cell md:table-cell">{{$item->jumlah}}</td>
                            <td class="px-3 py-3 hidden sm:table-cell md:table-cell">Rp {{number_format($item->hargasatuan*$item->jumlah,2,',','.')}}</td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
     </div>
</div>

@endsection 