@extends('layouts.base')
 
@section('title', 'Register | ')
 
@section('content')
    <div class="w-full max-w-sm mx-auto">
        <div class="text-center">
            <span class="i-mdi-people-group bg-[#6C894A] text-6xl"></span>
        </div>
        <form action="{{route('register.post')}}" method="POST" class="bg-[#FF8833] max-h-full rounded-3xl px-8 pt-8 pb-8 mb-4">
            @csrf
            <div class="mb-8 text-center text-lg">
                <span class="text-white font-bold">Welcome to WasteLess</span>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-people-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('nama') ? '' : 'mb-6'}} ">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" name="nama" type="text" placeholder="Nama Pengguna">
                </div>
            </div>
            @error('nama')
            <span class=" px-2 inline-flex text-sm text-red-700">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('nama') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-email-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('email') ? '' : 'mb-6'}} ">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="Email">
                </div>
            </div>
            @error('email')
            <span class=" px-2 inline-flex text-sm text-red-700">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('email') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-telephone-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('no_hp') ? '' : 'mb-6'}} ">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" name="no_hp" type="text" placeholder="No Telepon">
                </div>
            </div>
            @error('no_hp')
            <span class=" px-2 inline-flex text-sm text-red-700">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('no_hp') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('password') ? '' : 'mb-6'}} ">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Kata Sandi">
                </div>
            </div>
            @error('password')
            <span class=" px-2 inline-flex text-sm text-red-700">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('password') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('confirm_password') ? '' : 'mb-6'}} ">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 pl-10 text-gray-700 text-sm leading-tight focus:outline-none focus:shadow-outline" name="confirm_password" type="password" placeholder="Konfirmasi Kata Sandi">
                </div>
            </div>
            @error('confirm_password')
            <span class=" px-2 inline-flex text-sm text-red-700">{{$message}}</span>
            @enderror
            <div class="{{ $errors->has('confirm_password') ? 'mt-7' : 'mt-10'}} flex flex-col items-center justify-center">
                <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-semibold py-1 px-6 rounded transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300" type="submit">
                    Daftar
                </button>
                <div class="flex text-xs pt-2 space-x-1">
                    <span>Sudah punya akun?</span>
                    <a class="underline hover:text-gray-50" href="{{route('login.view')}}">
                        Masuk
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection 