<div class="mt-8 flex flex-wrap h-80 pb-12 px-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300 shadow-md">
    <div class="flex items-end space-x-3">
        <img src={{ $image }} class="w-10">
        <h1 class="md:text-xl lg:text-2xl font-medium">{{ $title }}</h1>
    </div>
    <p class="mt-6 font-light">{{ $desc }}</p>
    <a href={{ $route }} class="text-center w-full text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
       Kunjungi
    </a>
</div>