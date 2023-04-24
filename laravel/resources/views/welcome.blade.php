@extends('layouts')
 
@section('title', '')
 
@section('content')
    <div class="about flex lg:flex-row md:flex-col mx-24 lg:space-x-24 md:space-x-16 items-center">
        <img src="{{ asset('img/about.jpg') }}" class="lg:w-[600] md:w-[400]">
        <div class="about-text lg:mt-0 md:mt-12">
            <h1 class="text-4xl text-[#FF8833] font-semibold">WasteLess</h1>
            <p class="mt-4 lg:text-lg md:text-[16px] mr-2">Platform untuk masyarakat Indonesia melakukan jual beli sampah agar dapat membantu rumah tangga dan industri dalam masalah pengelolaan sampah.</p>
        </div>
    </div>
    <hr class="my-6 border-black sm:mx-auto lg:my-16 w-[90%]" />
@endsection