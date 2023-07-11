<nav class="fixed bg-white w-full z-40 border-b">
    <div x-data="{showMenu : false}" class="flex flex-wrap items-center justify-between mx-auto py-2 md:px-12">
        <!-- Brand-->
        <a href="/" class="flex items-center cursor-pointer px-2 ml-3 lg:p-0 lg:ml-0">
            <!-- Logo-->
            <img src="{{ asset('img/logo bulet 1.png') }}" class="w-10 h-10 block lg:hidden">
            <img src="{{ asset('img/logo orange.png') }}" class="hidden lg:block">
        </a>

        

        <!-- Navbar Toggle Button -->
        <button @click="showMenu = !showMenu" class="block md:hidden text-gray-700 p-2 rounded hover:border focus:border focus:bg-gray-100 my-2 mr-5" type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <!-- Nav Links-->
        <ul class="md:flex items-center text-sm font-medium md:space-x-6 xl:space-x-8 origin-top"
            :class="{ 'absolute top-14 border-b bg-white w-full p-8': showMenu, 'hidden': !showMenu}"
            id="navbar-main" x-cloak>
            <li class="py-1">
                <a href="/#tentang-kami" class="group cursor-pointer">Tentang Kami
                    <span class="hidden md:block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]" :class="showMenu && 'mb-4'"></span>
                </a>
            </li>
            <li class="py-1">
                <a href="/#layanan" class="group cursor-pointer">Layanan
                    <span class="hidden md:block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]" :class="showMenu && 'mb-4'"></span>
                </a>
            </li>
            <li class="py-1">
                <a href="/#jenis-sampah" class="group cursor-pointer">Jenis Sampah
                    <span class="hidden md:block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]" :class="showMenu && 'mb-2'"></span>
                </a>
            </li>
            <li class="mt-6 md:mt-0">
                @if(Auth::guest())
                    <a href="{{route('login.view')}}" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                        Masuk
                    </a>
                @else
                <div class="dropdown-profile my-auto md:ml-2">
                    <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <!-- if gaada foto profil -->
                        {{-- <span class="i-bi-people-circle w-6 h-6"></span> --}}
                        <!-- kl ada foto profil -->
                        <img src="{{ asset('img/sampah plastik.png') }}" alt="" class="w-6 h-6 rounded-full">
                    </button>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 truncate">{{Auth::user()->nama }}</span>
                            <span class="block text-sm text-gray-500 truncate">{{Auth::user()->email }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
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
            </li>
        </ul>
        
    </div>
</nav>