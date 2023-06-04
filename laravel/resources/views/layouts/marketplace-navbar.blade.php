{{-- <nav class="fixed w-full bg-[FEC261]"> 
    <div class="flex text-sm items-center justify-between m-1">
        <a href="/#tentang-kami">Tentang Kami</a>
        <a href="/#layanan">Layanan</a>
        <a href="/#jenis-sampah">Jenis Sampah</a>
    </div>
</nav> --}}

<nav class="fixed bg-white w-full z-30 border-b">
    <div class="text-xs items-center justify-end space-x-4 font-medium pt-2 pr-2 mr-2 hidden md:flex">
        <a href="/#tentang-kami">Tentang Kami</a>
        <a href="/#layanan">Layanan</a>
        <a href="/#jenis-sampah">Jenis Sampah</a>
        <a href="/home-opafe">Marketplace</a>
    </div>
    <div class="text-xs text-right justify-end space-x-4 font-medium pt-2 pr-2 mr-2 flex md:hidden">
        <a href="/">Home</a>
        <a href="/home-page">Marketplace</a>
    </div>
    <div class="flex md:flex-wrap items-center justify-around md:justify-between md:mx-auto py-2 px-2 md:px-12">
        <a href="/" class="items-center cursor-pointer hidden md:block">
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
        <div class="dropdown-shop hover:bg-gray-200 my-auto w-8 h-8 rounded mr-2 lg:mr-6">
            <button type="button" id="shop-menu-button" aria-expanded="false" data-dropdown-toggle="shop-dropdown" data-dropdown-placement="bottom">
                <span class="i-bi-shop w-5 h-5 m-1.5"></span>
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white rounded-lg shadow" id="shop-dropdown">
                <ul class="py-2" aria-labelledby="shop-menu-button">
                    <li>
                        <a href="{{route('penjualan.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Penjualan</a>
                    </li>
                    <li>
                        <a href="{{route('ordertoko.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Status Order</a>
                    </li>
                    <li>
                        <a href="{{route('pendapatan.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pendapatan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden lg:block w-px h-10 my-auto mr-8 self-stretch bg-[#0F0F0F]"></div>
        @if(Auth::guest())
            <a href="{{route('login.view')}}" class="text-sm md:font-medium py-1 px-2 md:px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                Masuk
            </a>
        @else
        <div class="dropdown-profile my-auto">
            <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="i-bi-people-circle w-5 h-5 m-1.5"></span>
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 truncate">{{Auth::user()->nama }}</span>
                    <span class="block text-sm text-gray-500 truncate">{{Auth::user()->email }}</span>
                </div>
            
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{route('pembelian.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pembelian</a>
                    </li>
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
  
{{-- <nav class="fixed bg-white w-full z-40 border-b">
    <div x-data="{showMenu : false}" class="flex flex-wrap items-center justify-between mx-auto py-2 md:px-14">
            <a href="/" class="flex items-center cursor-pointer px-2 ml-3">
                <img src="{{ asset('img/logo bulet 1.png') }}" class="w-10 h-10 block lg:hidden">
                <img src="{{ asset('img/logo orange.png') }}" class="hidden lg:block">
            </a>
            <button @click="showMenu = !showMenu" class="block md:hidden text-gray-700 p-2 rounded hover:border focus:border focus:bg-gray-100 my-2 mr-5" type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <ul class="md:flex items-baseline text-sm font-medium md:space-x-4 xl:space-x-7 origin-top"
            :class="{ 'absolute top-14 border-b bg-white w-full p-8': showMenu, 'hidden': !showMenu}"
            id="navbar-main" x-cloak>
                <div class="relative mx-auto text-gray-600 w-2/5 lg:w-5/12 xl:w-3/5">
                    <div class="absolute left-0 top-0 mt-6 mx-2">
                        <span class="i-material-symbols-search w-5"></span>
                    </div>
                    <form action="{{ route('search-produk') }}" method="get" class = "mt-4 ">
                    <input
                        type = "text" name="search"
                        class="border-2 border-gray-300 bg-white h-8 w-full pl-10 pr-2 rounded-lg text-sm focus:outline-none">
                    </form>
                </div>
                <div class="flex flex-wrap items-baseline space-x-7 text-sm font-medium">
                <div class="hover:bg-gray-200 my-auto w-8 h-8 rounded">
                        <a href="{{route('keranjang')}}" class="i-ph-shopping-cart w-5 h-5 m-1.5"></a>
                    </div>
                    <div class="dropdown-shop hover:bg-gray-200 my-auto w-8 h-8 rounded">
                        <button type="button" id="shop-menu-button" aria-expanded="false" data-dropdown-toggle="shop-dropdown" data-dropdown-placement="bottom">
                            <span class="i-bi-shop w-5 h-5 m-1.5"></span>
                        </button>
                        <div class="z-50 hidden my-4 text-base list-none bg-white rounded-lg shadow" id="shop-dropdown">
                            <ul class="py-2" aria-labelledby="shop-menu-button">
                                <li>
                                    <a href="{{route('penjualan.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Penjualan</a>
                                </li>
                                <li>
                                    <a href="{{route('ordertoko.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Status Order</a>
                                </li>
                                <li>
                                    <a href="{{route('pendapatan.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pendapatan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-px self-stretch bg-[#706968]"></div>
                @if(Auth::guest())
                    <a href="{{route('login.view')}}" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                        Masuk
                    </a>
                @else
                    <div class="dropdown-profile my-auto">
                        <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="i-bi-people-circle w-5 h-5"></span>
                        </button>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 truncate">{{Auth::user()->nama }}</span>
                                <span class="block text-sm text-gray-500 truncate">{{Auth::user()->email }}</span>
                            </div>
                                
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{route('pembelian.view')}}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pembelian</a>
                                </li>
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
            </ul>
    </div>
</nav> --}}
