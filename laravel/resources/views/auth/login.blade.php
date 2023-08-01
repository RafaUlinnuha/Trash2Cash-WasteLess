@extends('layouts.base')
 
@section('title', 'Login | ')
 
@section('content')
    <div class="max-w-sm mx-auto pt-10">
        <div class="text-center">
            <span class="i-mdi-people-group bg-[#6C894A] w-16 h-10 -mb-[6.6px]"></span>
        </div>
        <form action = "{{route('login.post')}}" method="POST" class="bg-[#FF8833] max-h-full rounded-3xl px-6 md:px-8 pt-8 pb-8">
            @csrf
            <div class="mb-8 text-center md:text-lg">
                <span class="text-center mb-8 font-bold text-lg lg:text-xl text-white">Welcome to WasteLess!</span>
            </div>
            @if (Session::has('error'))
            <div class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{Session::get('error')}}
                </div>
            </div>
            @endif
            @if (Session::has('status'))
            <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                 {{Session::get('status')}}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            @endif
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-mail-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-4 md:mb-6">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 md:pl-10 p-1.5 md:p-2.5" id="email" name="email" type="text" placeholder="Email">
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                </div>
                <div class="mb-2" x-data="{ show: true }">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 md:pl-10 p-1.5 md:p-2.5" name="password" id="password" type="password" placeholder="Kata Sandi":type="show ? 'password' : 'text'">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <span class="i-bi-eye h-6 text-gray-700" @click="show = !show"
                        :class="{'block': !show, 'hidden':show }"></span>    
                        <span class="i-carbon-view-off h-6 text-gray-700" @click="show = !show"
                        :class="{'hidden': !show, 'block':show }"></span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mt-10">
                <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-semibold py-1 px-6 rounded transition duration-300" type="submit">
                    Masuk
                </button>
                <div class="flex text-xs pt-2 space-x-1">
                    <span>Belum punya akun?</span>
                    <a class="underline hover:text-gray-50" href="{{route('register.view')}}">
                        Daftar
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection 