@php
    $user = Auth::user();
    $currentUrl = Request::url();
@endphp

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="text-xs items-center justify-end space-x-4 font-medium py-1 pr-2 flex bg-[#FEC261]">
        <a href="/#tentang-kami">Tentang Kami</a>
        @if($user->role == 'anggota')
        <a href="/home-page">Kunjungi Marketplace</a>
        @endif
    </div>
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="{{route($user->role == 'anggota'? 'anggota-home':'bank-status')}}" class="flex ml-2 md:mr-24">
                <img src="{{ asset('img/logo orange.png') }}" class="h-8 mr-3"">
                </a>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-100 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
   <div class="flex flex-col items-center my-6">
            @if($user->foto_profil == null)
                <span class="i-bi-people-circle w-24 h-24 text-gray-600"></span>
                <!-- kl ada foto profil -->
                @else
                <img src="{{asset('storage/foto_user/'.$user->foto_profil)}}" alt="" class="w-24 h-24 rounded-full">
            @endif            
            <h4 class="mx-2 mt-2 font-medium text-center text-gray-800 dark:text-gray-200">{{$user->nama}}</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">{{$user->email}}</p>
        </div>
        <ul class="space-y-2 font-medium">
            @if($user->role == 'anggota')
            <!-- USER ROLE ANGGOTA -->
            <li>
                <a href="{{route('anggota-home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('anggota-home') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="{{route('anggota-daur')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('anggota-daur') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Penyetoran Sampah</span>
                </a>
            </li>
            <li>
                <a href="{{route('anggota-status')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('anggota-status') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Status Penyetoran</span>
                </a>
            </li>
            <li>
                <a href="{{route('anggota.pendapatan')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('anggota.pendapatan') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                    <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Pendapatan</span>
                </a>
            </li>
            @elseif($user->role == 'bank_sampah')
            <!-- USER ROLE BANK SAMPAH -->
            <li>
                <a href="{{route('bank-status')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('bank-status') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Status Penyetoran</span>
                </a>
            </li>
            <li>
                <a href="{{route('penjualan.view')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('penjualan.view') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 21">
                    <path d="M15 14H7.78l-.5-2H16a1 1 0 0 0 .962-.726l.473-1.655A2.968 2.968 0 0 1 16 10a3 3 0 0 1-3-3 3 3 0 0 1-3-3 2.97 2.97 0 0 1 .184-1H4.77L4.175.745A1 1 0 0 0 3.208 0H1a1 1 0 0 0 0 2h1.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 10 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3Zm-8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                    <path d="M19 3h-2V1a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V5h2a1 1 0 1 0 0-2Z"/>
                </svg>
                <span class="ml-3">Penjualan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ordertoko.view') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('ordertoko.view') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Status Order</span>
                </a>
            </li>
            <li>
                <a href="{{route('pendapatan.view')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('pendapatan.view') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                    <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Pendapatan</span>
                </a>
            </li>
            @else
            <!-- USER ROLE ADMIN -->
            <li>
                <a href="{{route('admin.dashboard')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('admin.dashboard') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.user')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('admin.user') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">User</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.order')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('admin.order') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Order</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.penyetoran')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('admin.penyetoran') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Penyetoran Sampah</span>
                </a>
            </li>
            @endif
            <li>
                <a href="{{ route('profil.view') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                {{ $currentUrl == route('profil.view') ? 'bg-[#FF8833] text-white' : '' }}">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                    <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Profil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout.post') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
   </div>
</aside>