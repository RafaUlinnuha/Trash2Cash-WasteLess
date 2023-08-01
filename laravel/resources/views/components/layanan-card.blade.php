<div class="mt-8 flex flex-wrap h-72 md:h-64 lg:h-[300px] pb-6 lg:pb-12 px-6 lg:px-8 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300 shadow-md">
    <div class="flex items-end space-x-3 mt-0 lg:mt-4 xl:mt-0">
        <img src={{ $image }} class="w-8 xl:w-10">
        <h1 class="text-lg lg:text-xl font-medium">{{ $title }}</h1>
    </div>
    <p class="mt-4 lg:mt-6 font-light text-sm xl:text-base">{{ $desc }}</p>
    <a href={{ $route }} class="text-center w-full text-sm lg:text-base xl:text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
       Kunjungi
    </a>
</div>