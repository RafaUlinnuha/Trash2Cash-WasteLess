@extends('layouts')
 
@section('title', 'Login | ')
 
@section('content')
    <div class="w-full max-w-sm mx-auto">
        <div class="text-center">
            <span class="i-mdi-people-group bg-[#6C894A] text-6xl"></span>
        </div>
        <form class="bg-[#FF8833] max-h-full rounded-3xl px-8 pt-8 pb-8 mb-4">
            <div class="mb-8 text-center text-lg">
                <span class="text-white font-extrabold">Welcome to WasteLess</span>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-mail-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-6">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-2">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Kata Sandi">
                </div>
            </div>
            <div class="mb-10">
                <a class="inline-block align-baseline text-xs text-black underline" href="#">
                    Lupa kata sandi?
                </a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-bold py-1 px-6 rounded" type="button">
                    Masuk
                </button>
                <div class="flex text-xs pt-2 space-x-1">
                    <span>Belum punya akun?</span>
                    <a class="underline" href="#">
                        Daftar
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection 