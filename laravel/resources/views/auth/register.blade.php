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
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" name="nama" type="text" placeholder="Nama Pengguna">
                </div>
            </div>
            @error('nama')
            <span class=" px-2 inline-flex text-sm text-slate-50">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('nama') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-email-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('email') ? '' : 'mb-6'}} ">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" name="email" type="text" placeholder="Email">
                </div>
            </div>
            @error('email')
            <span class=" px-2 inline-flex text-sm text-slate-50">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('email') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-telephone-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('no_hp') ? '' : 'mb-6'}} ">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" name="no_hp" type="text" placeholder="No Telepon">
                </div>
            </div>
            @error('no_hp')
            <span class=" px-2 inline-flex text-sm text-slate-50">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('no_hp') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('password') ? '' : 'mb-6'}} "  x-data="{ show: true }">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" name="password" type="password" placeholder="Kata Sandi":type="show ? 'password' : 'text'">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <span class="i-bi-eye h-6 text-gray-700" @click="show = !show"
                        :class="{'block': !show, 'hidden':show }"></span>    
                        <span class="i-carbon-view-off h-6 text-gray-700" @click="show = !show"
                        :class="{'hidden': !show, 'block':show }"></span>
                    </div>
                </div>
            </div>
            @error('password')
            <span class="px-2 inline-flex text-sm text-slate-50">{{$message}}</span>
            @enderror
            <div class="relative {{ $errors->has('password') ? 'mt-2' : ''}}">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="{{ $errors->has('confirm_password') ? '' : 'mb-6'}}" x-data="{ show: true }">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" name="confirm_password" type="password" placeholder="Konfirmasi Kata Sandi":type="show ? 'password' : 'text'">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <span class="i-bi-eye h-6 text-gray-700" @click="show = !show"
                        :class="{'block': !show, 'hidden':show }"></span>    
                        <span class="i-carbon-view-off h-6 text-gray-700" @click="show = !show"
                        :class="{'hidden': !show, 'block':show }"></span>
                    </div>
                </div>
            </div>
            @error('confirm_password')
            <span class=" px-2 inline-flex text-sm text-slate-50">{{$message}}</span>
            @enderror
            <div class="{{ $errors->has('confirm_password') ? 'mt-7' : 'mt-10'}} flex flex-col items-center justify-center">
                <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-semibold py-1 px-6 rounded transition duration-300" type="submit">
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