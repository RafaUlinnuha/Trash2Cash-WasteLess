<nav class="fixed bg-white w-full z-40 border-b">
    <div x-data="{showMenu : false}" class="flex flex-wrap items-center justify-between mx-auto py-2 md:px-12">
        <!-- Brand-->
        <a href="/" class="flex items-center cursor-pointer px-2 ml-3 lg:p-0 lg:ml-0">
            <!-- Logo-->
            <img src="{{ asset('img/logo bulet 1.png') }}" class="w-10 h-10 block lg:hidden">
            <img src="{{ asset('img/logo orange.png') }}" class="hidden lg:block">
        </a>
        <!-- Nav Links-->
        <ul class="md:flex items-center text-sm font-medium md:space-x-6 xl:space-x-8 origin-top">
            <li class="hidden md:block">
                <a href="/#tentang-kami" class="group cursor-pointer">Tentang Kami
                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                </a>
            </li>
            <li class="hidden md:block">
                <a href="/#layanan" class="group cursor-pointer">Layanan
                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                </a>
            </li>
            <li class="hidden md:block">
                <a href="/#jenis-sampah" class="group cursor-pointer">Jenis Sampah
                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                </a>
            </li>
            <li class="mr-3">
                @if(Auth::guest())
                    <a href="{{route('login.view')}}" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300 items-center">
                        Masuk
                    </a>
                @else
                <div class="dropdown-profile my-auto md:ml-2">
                    <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <!-- if gaada foto profil -->
                        @php
                            $user = Auth::user();
                        @endphp
                        @if($user->foto_profil == null)
                        <span class="i-bi-people-circle w-8 h-8 md:w-6 md:h-6"></span>
                        <!-- kl ada foto profil -->
                        @else
                        <img src="{{asset('storage/foto_user/'.$user->foto_profil)}}" alt="" class="w-8 h-8 md:w-6 md:h-6 rounded-full">
                        @endif
                    </button>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 truncate">{{Auth::user()->nama }}</span>
                            <span class="block text-sm text-gray-500 truncate">{{Auth::user()->email }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            @if(Auth::user()->role == 'bank_sampah')
                            <li>
                                <a href="{{ route('bank-status') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pengelolaan Bank Sampah</a>
                            </li>
                            @elseif(Auth::user()->role == 'anggota')
                            <li>
                                <a href="{{ route('anggota-status') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pengelolaan Bank Sampah</a>
                            </li>
                            @endif
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