<html>
    <head>
        <title>@yield('title')WasteLess</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <!-- navbar sebelum login -->
        <div class="flex flex-col h-screen">
            @section('navbar')
            <nav>
                <div class="py-2 px-14">
                    <div class="flex justify-between items-center">
                        <div class="logo">
                            <img src="{{ asset('img/logo orange.png') }}">
                        </div>
                        <div class="space-x-7 text-sm">
                            <a href="#">Layanan</a>
                            <a href="#">Artikel</a>
                            <a href="#">Tentang Kami</a>
                            <a href="#">Kontak Kami</a>
                            <a href="#" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition duration-300">Masuk</a>
                        </div>
                    </div>
                </div>
            </nav>
            @show
     
            <div class="mb-auto mt-16">
                @yield('content')
            </div>
    
            @section('footer')
            <footer class="bg-[#6C894A] mt-16">
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
                            <div class="flex flex-wrap space-x-4  mb-4">
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