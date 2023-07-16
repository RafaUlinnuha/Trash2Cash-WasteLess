<nav class="fixed bg-white w-full z-30 border-b">
    <div class="text-xs items-center justify-end space-x-4 font-medium py-1 pr-2 flex bg-[#FEC261]">
        <a href="/#tentang-kami">Tentang Kami</a>
        <a href="anggota">Bank Sampah</a>
        @if(Auth::user()->role != 'admin')
        <a href="{{route('home-page')}}">Marketplace</a>
        @endif
    </div>
    <div class="flex md:flex-wrap items-center md:mx-auto py-2 px-2 md:px-12">
        <div class="flex items-center cursor-pointer px-2 ml-3 lg:p-0 lg:ml-0">
            <!-- Logo-->
            <img src="{{ asset('img/logo bulet 1.png') }}" class="w-10 h-10 block lg:hidden">
            <img src="{{ asset('img/logo orange.png') }}" class="hidden lg:block">
            <div class="block w-px h-10 my-auto mx-4 self-stretch bg-[#0F0F0F]"></div>
            <h1 class="m-2 text-xl lg:text-2xl">Profil</h1>
</div>
    </div>
</nav>