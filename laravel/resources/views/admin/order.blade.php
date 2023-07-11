@extends('layouts.base')
 
@section('title', 'Admin | ')
 
@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4">
        <div class="grid grid-cols-1 p-4">
            <h1 class="text-xl md:text-3xl">
            Daftar Order
            </h1>        
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            
                            <div class="flex items-center">
                                @sortablelink('updated_at', 'Tanggal')
                                <a href=""><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Setor id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                @sortablelink('status', 'Status')
                                <a href=""><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bukti Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Aksi</span>
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
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$i++}}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($item->updated)->format('d/m/Y') }}</td>
                        <td class="px-6 py-4">setor-{{substr($item->id,0,6)}}</td>
                        <td class="px-6 py-4">harga</td>
                        <td class="px-6 py-4">{{$item->status}}</td>
                        <td class="px-6 py-4"><img src="{{asset('storage/bukti_pembayaran/1685218211_Jepretan Layar 2023-05-27 pukul 11.55.55.png')}}" alt="" class="p-4"></td>
                        <td class="px-6 py-4">
                        <button type="button" data-modal-target="#popup-modal-konfirmasi" data-modal-toggle="popup-modal-konfirmasi" class="font-medium text-[#6C894A]">
                            <span class="i-material-symbols-check-circle-outline w-4 h-4"></span>
                        </button>
                        <div id="popup-modal-konfirmasi" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-konfirmasi">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Konfirmasi Pembayaran"</h3>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Once confirmed, this cannot be modified or canceled. Are you sure you want to proceed?</h3>
                                        <a href="" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Confirm
                                        </a>
                                        <button data-modal-hide="popup-modal-konfirmasi" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $order->appends(Request::except('page'))->render() !!}
        <p>
            Displaying {{$order->count()}} of {{ $order->total() }} order(s).
        </p>
    </div>
</div>

@endsection 
