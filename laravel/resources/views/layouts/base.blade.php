<html>
    <head>
        <title>@yield('title')WasteLess</title>
        <link rel = "icon" href ="{{ asset('img/logo bulet 1.png') }}" 
        type = "image/x-icon">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <!-- navbar sebelum login -->
        <div class="flex flex-col h-screen">
            @section('navbar')
            <nav class="fixed bg-white w-full z-[1100]">
                <div class="py-2 px-14">
                    <div class="flex justify-between items-center">
                        <a href="/" class="logo">
                            <img src="{{ asset('img/logo orange.png') }}">
                        </a>
                        @if(!Auth::guest())
                            <div class="relative mx-auto text-gray-600 w-3/5">
                                <div class="absolute left-0 top-0 mt-2 mx-2">
                                    <span class="i-material-symbols-search w-5"></span>
                                </div>
                                <input
                                    class="border-2 border-gray-300 bg-white h-8 w-full pl-10 pr-2 rounded-lg text-sm focus:outline-none">
                            </div>
                        @endif
                        <div class="flex flex-wrap items-baseline space-x-7 text-sm font-medium">
                            @if(Auth::guest())
                                <a href="#" class="group">Tentang Kami
                                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                                </a>
                                <a href="#" class="group">Layanan
                                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                                </a>
                                <a href="#" class="group">Jenis Sampah
                                    <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                                </a>
                                <a href="{{route('login.view')}}" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                                    Masuk
                                </a>
                            @else
                                <div class="hover:bg-gray-200 my-auto w-8 h-8 rounded">
                                    <a href="{{route('keranjang')}}" class="i-ph-shopping-cart w-5 h-5 m-1.5"></a>
                                </div>
                                <div class="dropdown-shop hover:bg-gray-200 my-auto w-8 h-8 rounded">
                                    <button type="button" class="flex space-x-4" id="shop-menu-button" aria-expanded="false" data-dropdown-toggle="shop-dropdown" data-dropdown-placement="bottom">
                                        <span class="i-solar-shop-2-linear w-5 h-5 m-1.5"></span>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base list-none bg-white rounded-lg shadow" id="shop-dropdown">
                                        <ul class="py-2" aria-labelledby="shop-menu-button">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Penjualan</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('status-order') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Status Order</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Pendapatan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-px self-stretch bg-[#706968]"></div>
                                <div class="dropdown-profile my-auto">
                                    <button type="button" class="flex space-x-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                        <span class="i-bi-people-circle w-5 h-5"></span>
                                        <h1>{{Auth::user()->nama }}</h1>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                                        <span class="px-4 py-3 block text-sm text-gray-500 truncate">{{Auth::user()->email }}</span>
                                        <ul class="py-2" aria-labelledby="user-menu-button">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Pembelian</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('profil') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Profil</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout.post') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Log out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            @show
     
            <div class="mb-auto mt-28 px-32">
                @yield('content')
            </div>
    
            @section('footer')
            <footer class="bg-[#6C894A] mt-28">
                <div class="pt-8 pb-5 px-24">
                    <div class="flex flex-wrap justify-between">
                        <div>
                            <div class="logo mb-2">
                                <img src="{{ asset('img/logo white.png') }}">
                            </div>
                            <div class="flex flex-wrap mb-4 text-sm font-medium text-white space-x-4">
                                <a href="#" class="hover:text-gray-900">Tentang</a>
                                <a href="#" class="hover:text-gray-900">Layanan</a>
                                <a href="#" class="hover:text-gray-900">Bantuan</a>
                            </div>
                        </div>
                        <div>
                            <h2 class="py-4 text-lg font-semibold text-white">Kontak Kami</h2>
                            <div class="flex flex-wrap space-x-4 mb-4">
                                <a href="#" class="text-white hover:text-gray-900">
                                    <span class="i-mdi-linkedin text-2xl">Linkedin page</span>
                                </a>
                                <a href="#" class="text-white hover:text-gray-900">
                                    <span class="i-mdi-twitter text-2xl">Twitter page</span>
                                </a>                            
                                <a href="#" class="text-white hover:text-gray-900 ">
                                    <span class="i-mdi-instagram text-2xl">Instagram page</span>
                                </a>                            
                                <a href="#" class="text-white hover:text-gray-900">
                                    <span class="i-mdi-facebook text-2xl">Facebook page</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="text-sm text-gray-300">© 2023 <a href="#" class="hover:underline">WasteLess</a>. All Rights Reserved.</span>
                    </div>
                </div>
            </footer>
            @show
        </div>
    </body>
</html>