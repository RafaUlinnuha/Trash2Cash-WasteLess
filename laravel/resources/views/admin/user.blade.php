@extends('layouts.base')
 
@section('title', 'User | ')
 
@section('content')

<h1 class="text-2xl lg:text-4xl font-semibold text-center md:text-left">User Terdaftar</h1>
<div class="text-right">
    <button data-modal-target="adduser-modal" data-modal-toggle="adduser-modal" class="mt-6 md:mt-0 px-2 md:px-8 py-2 font-medium text-sm text-center text-white bg-[#8092C1] hover:bg-blue-800 rounded-full md:rounded-lg transition ease-in-out delay-150 duration-300" type="button">
      <span class="i-material-symbols-add flex md:hidden"></span>  
      <span class="md:flex hidden">Tambah User</span>
    </button>
</div>
@include('admin.modal.add-user')
@if($errors->any())
    @component('components.alert', ['id' => 'alert-3', 'color' => 'red', 'message' => 'Gagal membuat user baru'])
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endcomponent
@endif
@if(session('success'))
    @component('components.alert', ['id' => 'alert-3', 'color' => 'green','message' => session('success')])
    @endcomponent
@endif
<div class="block w-full overflow-x-auto border border-gray-200 mt-8">
    @php $i=1 @endphp
    <table class="items-center w-full bg-transparent border-collapse">
        <thead>
        <tr class="text-center">
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">No</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">User Id</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Nama</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Email</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">No Hp</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">Role</th>
            <th class="px-1 bg-gray-100 dark:bg-gray-600 text-gray-900 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">rincian</th>
        </tr>
        </thead>
        <tbody>
        @forelse($user as $item)
        <tr class="text-gray-700 dark:text-gray-100">
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{$i++}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">user-{{substr($item->id,0,6)}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$item->nama}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$item->email}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{$item->no_hp}}</td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">{{$item->role}}</td>
            <td class="px-3 py-4 flex justify-center">
                <a href="{{route('admin.rincian-user', $item->id)}}" class="font-medium">
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
                    Tidak ada user terdaftar.
                </td> 
            </tr>
        @endforelse
        </tbody>
    </table>
</div> 

<div class="col-md-12">
    {{ $user->links('pagination::tailwind') }}
</div>


@endsection 