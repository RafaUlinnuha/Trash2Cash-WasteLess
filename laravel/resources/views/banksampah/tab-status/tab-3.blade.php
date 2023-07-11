<div x-show="current === 3" class="py-3 mt-4">
    @foreach($sampah as $item)
    @if($item->status == 'selesai')
    <a href="{{route('bank-setorkonfirmasi', $item->id)}}">
        <div class="rounded-lg p-2 border border-gray-200 shadow my-2">
            <div class="flex space-x-4 items-center m-0 text-xs md:text-sm">
                <h1 class="flex-none font-semibold my-auto text-xs md:text-sm">Setoran-{{substr($item->id, 0,6)}}</h1>
                <h1 class="items-center mx-auto p-1 md:p-2 text-center text-white bg-[#8092C1] rounded-lg text-xs md:text-sm">Selesai</h1>
            </div>
            <div class="grid py-2 grid-rows-2 md:grid-rows-1 grid-flow-col md:grid-cols-6">
                <div class="col-span-1 md:col-span-2 grid md:grid-rows-7 sm:grid-rows-3 grid-flow-row-dense md:grid-cols-1 grid-cols-5">
                    <div class="text-xs wrap md:text-sm font-medium col-span-3">
                        <p>{{$item->anggotaUser->nama}}</p>
                    </div>
                    <div class="text-xs md:text-sm font-medium col-span-3">
                        <p>{{$item->anggotaUser->no_hp}}</p>
                    </div>
                    
                    <div class="text-xs md:text-sm font-thin col-span-2 text-end md:text-start">
                        <p>12/17/2023</p>
                    </div>
                    <div class="text-xs md:text-sm font-thin col-span-2 text-end md:text-start">
                        <p>08:00-10:00 WIB</p>
                    </div>
                    <div class="row-span-3 text-xs md:text-sm font-thin col-span-3">
                        <p>{{$item->anggotaUser->alamatUser->alamat.', Kecamatan '.$item->anggotaUser->alamatUser->kecamatan.', Kota '.$item->anggotaUser->alamatUser->kota.', Provinsi '
                            .$item->anggotaUser->alamatUser->provinsi.', '.$item->anggotaUser->alamatUser->kode_pos}}</p>
                    </div>
                </div>
                @php $harga = 0 @endphp
                <div class="col-span-1 md:col-span-4">
                    @foreach($item->itemSampah as $itemsampah)
                    <div class="p-1 rounded-lg border border-gray-200 mt-2">
                        <div class="flex grid grid-cols-2 md:grid-cols-6 md:flex-row md:justify-between space-y-2">
                            <div class="md:flex-row flex mt-2 md:mt-0 space-y-1 md:space-y-0 text-xs md:text-sm hidden md:block">
                                <img src="{{asset('storage/'.$itemsampah->kategoriSampah->gambar)}}" class="rounded-xl w-16 h-16 m-2">
                            </div>
                            <div class="col-span-1 md:col-span-2 md:flex-rows flex mt-2 mt-0 md:mt-2 space-y-1 md:space-y-0 text-xs md:text-sm">
                                <div class="grid grid-col-1 grid-row-6 gap-0">
                                    <h1 class="row-span-1 font-semibold">{{$itemsampah->nama_jenis}}</h1>
                                    <h1 class="row-span-1">Ketegori {{$itemsampah->kategoriSampah->nama}}</h1>
                                    <h1 class="hidden md:table-cell">Deskripsi: {{$itemsampah->deskripsi == null ? '-' : $itemsampah->deskripsi}}</h1>
                                    <h1 class="hidden md:table-cell row-span-3"> </h1>
                                </div>
                            </div>
                            <div class="col-span-1 md:col-span-3 md:flex-rows grid grid-cols-1 md:grid-cols-2 flex mt-0 md:space-y-0 text-xs md:text-sm md:items-center">
                                <h2 class="text-end md:text-center text-xs md:text-sm">{{$itemsampah->jumlah}} Kg</h2>
                                <h2 class="text-end text-xs md:text-sm">Rp {{number_format($itemsampah->hargasatuan*$itemsampah->jumlah,2,',','.')}}</h2>
                            </div>
                        </div>
                    </div>
                    @php $harga += $itemsampah->hargasatuan*$itemsampah->jumlah @endphp
                    @endforeach
                </div>
            </div>
            <div class="text-xs md:text-sm text-right px-2 mt-2">Total Harga: 
                <span class="text-[#FF8833]" data-harga="0">Rp {{number_format($harga,2,',','.')}}</span>
            </div>
        </div>
    </a>
    @endif
    @endforeach
</div>
