{{-- <nav class="fixed w-full bg-[FEC261]"> 
    <div class="flex text-sm items-center justify-between m-1">
        <a href="/#tentang-kami">Tentang Kami</a>
        <a href="/#layanan">Layanan</a>
        <a href="/#jenis-sampah">Jenis Sampah</a>
    </div>
</nav> --}}

<nav class="fixed bg-white w-full z-30 border-b">
    <div class="text-xs items-center justify-end space-x-4 font-medium py-1 pr-2 flex bg-[#FEC261]">
        <a href="/#tentang-kami">Tentang Kami</a>
        @if(Auth::guest())
            <a href="/login">Masuk ke Bank Sampah</a>
        @elseif(Auth::user()->role == 'anggota')
            <a href="/anggota">Masuk ke Bank Sampah</a>
        @elseif(Auth::user()->role == 'bank_sampah')
            <a href="/bank-sampah/penjualan">Masuk ke Bank Sampah</a>
        @elseif(Auth::user()->role == 'pembeli')
            <button data-modal-target="jadianggota-modal" data-modal-toggle="jadianggota-modal" type="button">
            Daftar jadi Anggota
            </button>
        else
        @endif
    </div>
    <div class="flex md:flex-wrap items-center justify-around md:justify-between md:mx-auto py-2 px-2 md:px-12">
        <a href="/home-page" class="items-center cursor-pointer hidden md:block">
            <img src="{{ asset('img/logo orange.png') }}" class="scale-90">
        </a>
        <div class="flex items-center my-auto lg:flex-grow w-1/2 md:w-fit">
            <div class="relative md:mx-auto text-gray-600 lg:w-11/12">
                <div class="absolute left-0 top-0 mt-2 mx-2">
                    <span class="i-material-symbols-search w-5"></span>
                </div>
                <form action="{{ route('search-produk') }}" method="get">
                <input
                    type = "text" name="search"
                    class="border-2 border-gray-300 bg-white h-8 w-full pl-10 pr-2 rounded-lg text-sm focus:outline-none">
                </form>
            </div>
        </div>
        <div class="hover:bg-gray-200 my-auto w-8 h-8 rounded lg:px-0 mr-2 lg:mr-6">
            <a href="{{route('keranjang')}}" class="i-ph-shopping-cart w-5 h-5 m-1.5"></a>
        </div>
        <a href="{{route('pembelian.view')}}" class="hover:bg-gray-200 my-auto w-8 h-8 p-1.5 rounded lg:px-0 mr-2 lg:mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
        </a>
        <div class="hidden lg:block w-px h-10 my-auto mr-8 self-stretch bg-[#0F0F0F]"></div>
        @if(Auth::guest())
            <a href="{{route('login.view')}}" class="text-sm md:font-medium py-1 px-2 md:px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                Masuk
            </a>
        @else
        <div class="dropdown-profile my-auto">
            <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                @php
                    $user = Auth::user();
                @endphp
                @if($user->foto_profil == null)
                <span class="i-bi-people-circle w-6 h-6"></span>
                <!-- kl ada foto profil -->
                @else
                <img src="{{asset('storage/foto_user/'.$user->foto_profil)}}" alt="" class="w-6 h-6 rounded-full">
                @endif
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 truncate">{{Auth::user()->nama }}</span>
                    <span class="block text-sm text-gray-500 truncate">{{Auth::user()->email }}</span>
                </div>
            
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <!-- <li>
                        <a href="{{route('pembelian.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pembelian</a>
                    </li> -->
                    <li>
                        <a href="{{ route('profil.view') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('logout.post') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </div>
  </nav>

@if(!Auth::guest() && Auth::user()->role == 'pembeli')
<div id="jadianggota-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="jadianggota-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda ingin mendaftar menjadi anggota bank sampah?</h3>
                <a href="{{route('daftar-anggota', Auth::id())}}" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Ya, Daftar
                </a>
                <button data-modal-hide="jadianggota-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div>
@endif