{{-- <nav class="fixed w-full bg-[FEC261]"> 
    <div class="flex text-sm items-center justify-between m-1">
        <a href="/#tentang-kami">Tentang Kami</a>
        <a href="/#layanan">Layanan</a>
        <a href="/#jenis-sampah">Jenis Sampah</a>
    </div>
</nav> --}}

<nav class="fixed bg-white w-full z-30 border-b">
    <div class="text-xs items-center justify-end space-x-4 font-medium py-1 pr-2 hidden md:flex bg-[#FEC261]">
        <a href="/#tentang-kami">Tentang Kami</a>
        <a href="/#layanan">Layanan</a>
        <a href="/#jenis-sampah">Jenis Sampah</a>
        <a href="/home-page">Marketplace</a>
    </div>
    <div class="text-xs text-right justify-end space-x-4 font-medium py-1 pr-2 flex md:hidden bg-[#FEC261]">
        <a href="/">Home</a>
        <a href="/home-page">Marketplace</a>
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
        <div class="dropdown-shop hover:bg-gray-200 my-auto w-8 h-8 rounded mr-2 lg:mr-6">
            <button type="button" id="shop-menu-button" aria-expanded="false" data-dropdown-toggle="shop-dropdown" data-dropdown-placement="bottom">
                <span class="i-bi-shop w-5 h-5 m-1.5"></span>
            </button>
            <div class="z-50 hidden text-base list-none bg-white rounded-lg shadow" id="shop-dropdown">
                <ul aria-labelledby="shop-menu-button">
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