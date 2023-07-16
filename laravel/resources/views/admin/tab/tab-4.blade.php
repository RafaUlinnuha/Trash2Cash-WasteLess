<div x-show="current === 4" class="text-center mt-2 md:mt-4">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-xs md:text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center">
                <th scope="col" class="px-3 py-3">
                    No
                </th>
                <th scope="col" class="px-3 py-3">
                    <div class="flex items-center">
                        @sortablelink('updated_at', 'Tanggal')
                        <div><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg>
                        </div>
                    </div>
                </th>
                <th scope="col" class="px-3 py-3">
                    Setor id
                </th>
                <th scope="col" class="px-3 py-3">
                    Harga
                </th>
                <th scope="col" class="px-3 py-3">
                    Status Order
                </th>
                <th scope="col" class="px-3 py-3">
                    Bukti Pembayaran
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($order->count() == 0)
            <tr>
                <td colspan="5">No products to display.</td>
            </tr>
            @endif
            @php $i = 1@endphp
            @foreach ($order as $item)
            @if($item->pembayaran->status == 'batal')
            <tr>
                <td class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$i++}}</td>
                <td class="px-3 py-4">{{ \Carbon\Carbon::parse($item->updated)->format('d/m/Y') }}</td>
                <td class="px-3 py-4">setor-{{substr($item->id,0,6)}}</td>
                <td class="px-3 py-4">Rp {{number_format($item->pembayaran->total,2,',','.')}}</td>
                <td class="px-3 py-4 text-center">{{$item->status}}</td>
                <td class="px-3 py-4 text-center">
                @if($item->pembayaran->bukti_pembayaran)
                <a href="{{ route('download.image', ['path' => $item->pembayaran->bukti_pembayaran]) }}" class="flex justify-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                    <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                    </svg>
                </a>
                @else
                tidak ada
                @endif
                    <!-- <img src="{{asset('storage/bukti_pembayaran/'.$item->pembayaran->bukti_pembayaran)}}" alt="" class="p-4"> -->
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
</div>