<div class="mt-8 flex-row flex-wrap items-center h-64 md:h-56 lg:h-[270px] xl:h-80 pb-6 px-2 pt-6 lg:pt-10 bg-white border border-gray-200 rounded-lg transition ease-in-out delay-150 hover:scale-105 duration-300 shadow-md">
    <img src={{ $image }} class="mx-auto w-24 h-24 lg:w-20 lg:h-20 md:w-16 md:h-16 xl:w-32 xl:h-32">
    <h1 class="text-lg md:text-base lg:text-lg xl:text-xl text-center font-medium mt-6">{{ $title }}</h1>
    <div class="button text-center mt-6 md:mt-8">
        <a href={{ $route }} class="px-14 md:px-4 lg:px-8 xl:px-16 mx-auto text-sm lg:text-base xl:text-lg py-1 bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300 mt-auto">
           Cari Tahu
        </a>
    </div>
</div>