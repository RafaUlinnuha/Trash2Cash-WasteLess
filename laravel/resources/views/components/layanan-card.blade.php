<div class="mt-8 flex flex-wrap h-72 lg:h-80 pb-6 lg:pb-12 px-6 lg:px-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300 shadow-md">
    <div class="flex items-end space-x-3">
        <img src={{ $image }} class="w-8 xl:w-10">
        <h1 class="text-lg lg:text-xl font-medium">{{ $title }}</h1>
    </div>
    <p class="mt-4 lg:mt-6 font-light">{{ $desc }}</p>
    <a href={{ $route }} class="text-center w-full lg:text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
       Kunjungi
    </a>
</div>