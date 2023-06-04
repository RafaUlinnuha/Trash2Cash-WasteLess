<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')WasteLess</title>
        <link rel = "icon" href ="{{ asset('img/logo bulet 1.png') }}" 
        type = "image/x-icon">
        @vite(['resources/css/app.css','resources/js/app.js'])
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> --}}
    </head>
    <body>
        <!-- navbar sebelum login -->
        <div class="flex flex-col h-screen">
            @section('navbar')
                @if (in_array(Request::path(), ['/', 'login', 'register']))                   
                    @include('layouts.landing-navbar')
                @else
                    <!-- Navbar for Marketplace -->
                    @include('layouts.marketplace-navbar')
                @endif
            @show
     
            <div class="mt-24 md:mt-32 px-6 lg:px-24 mb-auto">
                @yield('content')
            </div>
        
    
            @section('footer')
            <footer class="bg-[#6C894A] mt-24 lg:mt-28 z-30">
                <div class="pt-8 pb-5 px-8 md:px-24">
                    <div class="flex flex-wrap justify-between">
                        <div>
                            <div class="logo mb-4 md:mb-2">
                                <img src="{{ asset('img/logo white.png') }}">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 space-y-1 md:space-y-0 mb-4 text-sm font-medium text-white text-left md:text-center">
                                <a href="#tentang-kami" class="hover:text-gray-900">Tentang Kami</a>
                                <a href="#layanan" class="hover:text-gray-900">Layanan</a>
                                <a href="#jenis-sampah" class="hover:text-gray-900">Jenis Sampah</a>
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