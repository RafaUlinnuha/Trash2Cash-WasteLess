<div x-show="current === 3" class="py-3 mt-4">
    @foreach($sampah as $item)
    @if($item->status == 'selesai')
    <div class="rounded-lg p-2 border border-gray-200 shadow my-2">
        <div class="flex space-x-4 items-center m-0 text-xs md:text-sm">
            <h1 class="flex-none font-semibold my-auto text-xs md:text-sm">Setoran-{{substr($item->id, 0,6)}}</h1>
            <h1 class="items-center mx-auto p-1 md:p-2 text-center text-white bg-[#8092C1] rounded-lg text-xs md:text-sm">Selesai</h1>
            <h1 class="flex-1 text-right px-2 hidden sm:hidden md:table-cell text-xs md:text-sm">Pendapatan: 
                <span id="harga3-{{$item->id}}" class="text-[#FF8833]" data-harga="0">Rp 0,00</span>
            </h1>
        </div>
        <table class="w-full text-left mt-4 text-xs md:text-sm">
            <tr class="bg-white">
                <td class="py-2 font-thin md:pl-0 md:w-1/3">
                    <table>
                        <tr>
                            <td class="hidden px-1 md:table-cell border-r border-gray-200">Bank Sampah </td>
                            <td class="md:px-2">{{$item->bankUser->nama}}</td>
                        </tr>
                        <tr>
                            <td class="hidden px-1 md:table-cell border-r border-gray-200">Tanggal Penjemputan</td>
                            <td class="md:px-2">{{$item->tgl_jemput}}</td>
                        </tr>
                        <tr>
                            <td class="hidden px-1 md:table-cell border-r border-gray-200">Waktu Penjemputan</td>
                            <td class="md:px-2">{{$item->waktu_jemput}} WIB</td>
                        </tr>
                    </table>
                </td>
                <td scope="col" class="md:py-3 md:px-4 font-thin text-center">
                    @php $harga = 0 @endphp
                    @foreach($item->itemSampah as $itemsampah)
                    <div class="md:border md:border-gray-200 shadow p-2 md:p-4 mb-2">
                        <div class="flex flex-wrap justify-between">
                            <div class="flex space-x-2 md:space-x-6">
                                <img src="{{asset('storage/'.$itemsampah->kategoriSampah->gambar)}}" class="rounded-xl w-16 h-16 hidden md:block">
                                <div class="flex-rows md:px-2 text-left">
                                    <p class="md:font-semibold text-xs md:text-sm"> {{$itemsampah->nama_jenis}} {{$itemsampah->jumlah}} Kg</p>
                                    <p class="hidden md:block text-xs md:text-sm">Kategori {{$itemsampah->kategoriSampah->nama}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $harga += $itemsampah->hargasatuan*$itemsampah->jumlah @endphp
                    @endforeach
                    <script>
                        var harga = {{$harga}};
                        var pendapatanSpan = document.getElementById('harga3-{{$item->id}}');
                        pendapatanSpan.setAttribute('data-harga', harga);
                        pendapatanSpan.textContent = 'Rp ' + harga.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                    </script>
                </td>
            </tr>
        </table>
        <div class="md:hidden text-xs text-right px-2 mt-2">Pendapatan: 
            <span class="text-[#FF8833]" data-harga="0">Rp {{number_format($harga,2,',','.')}}</span>
        </div>
    </div>
    @endif
    @endforeach
</div>
