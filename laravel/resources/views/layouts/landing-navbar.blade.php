<nav class="fixed bg-white w-full z-40">
        <div class="flex flex-wrap items-center justify-between mx-auto py-2 px-14">
    {{-- <nav class="fixed bg-white w-full z-40">
        <div class="py-2 px-14"> --}}
            {{-- <div class="flex justify-between items-center"> --}}
            <a href="/" class="logo">
                <img src="{{ asset('img/logo orange.png') }}">
            </a>
            <div class="flex flex-wrap items-baseline space-x-7 text-sm font-medium">
                <a href="#tentang-kami" class="group">Tentang Kami
                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                </a>
                <a href="#layanan" class="group">Layanan
                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                </a>
                <a href="#jenis-sampah" class="group">Jenis Sampah
                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                </a>
                @if(Auth::guest())
                <a href="{{route('login.view')}}" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                    Masuk
                </a>
                @else
                <div class="dropdown-profile my-auto">
                    <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="i-bi-people-circle w-5 h-5"></span>
                        {{-- <h1 class="w-1/2 truncate">{{Auth::user()->nama }}</h1> --}}
                    </button>
                    <!-- Dropdown menu -->
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
         {{-- </div> --}}
        </div>
    </div>
</nav>