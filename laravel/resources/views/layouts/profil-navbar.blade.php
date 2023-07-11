<nav class="fixed bg-white w-full z-30 border-b">
    <div class="text-xs items-center justify-end space-x-4 font-medium py-1 pr-2 flex bg-[#FEC261]">
        <a href="#tentang-kami">Tentang Kami</a>
        <a href="anggota">Masuk ke Bank Sampah</a>
    </div>
    <div class="flex md:flex-wrap items-center justify-around md:justify-between md:mx-auto py-2 px-2 md:px-12">
        <a href="/" class="flex items-center cursor-pointer px-2 ml-3 lg:p-0 lg:ml-0">
                <!-- Logo-->
                <img src="{{ asset('img/logo bulet 1.png') }}" class="w-10 h-10 block lg:hidden">
                <img src="{{ asset('img/logo orange.png') }}" class="hidden lg:block">
                <div class="hidden lg:block w-px h-10 my-auto mx-4 self-stretch bg-[#0F0F0F]"></div>
                <h1 class="m-2 text-xl lg:text-2xl">Profil</h1>
        </a>
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
    </div>
</nav>