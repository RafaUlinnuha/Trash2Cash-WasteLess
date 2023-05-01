@extends('layouts')
 
@section('title', 'page-title | ')
 
@section('content')
    
@endsection 
{{-- 
@extends('layouts')
 
@section('title', 'Login | ')
 
@section('content')
    <div class="w-full max-w-sm mx-auto">
        <div class="text-center">
            <span class="i-mdi-people-group bg-[#6C894A] text-6xl"></span>
        </div>
        <form class="bg-[#FF8833] max-h-full rounded-3xl p-8 mb-4">
            <div class="mb-8 text-center text-lg">
                <span class="text-white font-bold">Welcome to WasteLess</span>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-mail-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-6">
                    <input class="border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none" id="email" type="text" placeholder="Email">
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-2">
                    <input class="border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none" id="password" type="password" placeholder="Kata Sandi">
                </div>
            </div>
            <div class="mb-10">
                <a class="inline-block align-baseline text-xs text-black underline hover:text-gray-50" href="#">
                    Lupa kata sandi?
                </a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-semibold py-1 px-6 rounded transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300" type="button">
                    Masuk
                </button>
                <div class="flex text-xs pt-2 space-x-1">
                    <span>Belum punya akun?</span>
                    <a class="underline hover:text-gray-50" href="#">
                        Daftar
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection  --}}

{{-- 
@extends('layouts')
 
@section('title', 'Register | ')
 
@section('content')
    <div class="w-full max-w-sm mx-auto">
        <div class="text-center">
            <span class="i-mdi-people-group bg-[#6C894A] text-6xl"></span>
        </div>
        <form class="bg-[#FF8833] max-h-full rounded-3xl p-8 mb-4">
            <div class="mb-8 text-center text-lg">
                <span class="text-white font-bold">Welcome to WasteLess</span>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-bi-people-circle w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-6">
                    <input class="border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none" id="nama" type="text" placeholder="Nama Pengguna">
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-email-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-6">
                    <input class="border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none" id="email" type="text" placeholder="Email">
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-telephone w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-6">
                    <input class="border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none" id="no_telepon" type="text" placeholder="No Telepon">
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-2">
                    <input class="border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none" id="password" type="password" placeholder="Kata Sandi">
                </div>
            </div>
            <div class="mt-10 flex flex-col items-center justify-center">
                <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-semibold py-1 px-6 rounded transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300" type="button">
                    Daftar
                </button>
                <div class="flex text-xs pt-2 space-x-1">
                    <span>Sudah punya akun?</span>
                    <a class="underline hover:text-gray-50" href="#">
                        Masuk
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection  --}}

{{-- <html>
    <head>
        <title>@yield('title')WasteLess</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <!-- navbar sebelum login -->
        <div class="flex flex-col h-screen">
            @section('navbar')
            <nav class="fixed bg-white w-full z-[1100]">
                <div class="py-2 px-14">
                    <div class="flex justify-between items-center">
                        <div class="logo">
                            <img src="{{ asset('img/logo orange.png') }}">
                        </div>
                        <div class="flex flex-wrap items-baseline space-x-7 text-sm font-medium">
                            <a href="#" class="group">Tentang Kami
                                <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                            </a>
                            <a href="#" class="group">Layanan
                                <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                            </a>
                            <a href="#" class="group">Jenis Sampah
                                <span class="block mx-auto max-w-0 group-hover:max-w-full transition-all duration-500 h-[3px] rounded bg-[#6C894A]"></span>
                            </a>
                            <a href="#" class="py-1 px-5 bg-slate-50 hover:bg-[#6C894A] border-2 border-[#6C894A] text-[#6C894A] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                                Masuk
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            @show
     
            <div class="mb-auto mt-32 px-32">
                @yield('content')
            </div>
    
            @section('footer')
            <footer class="bg-[#6C894A] mt-32">
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
</html> --}}