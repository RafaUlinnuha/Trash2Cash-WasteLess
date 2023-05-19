@extends('layouts.base')
 
@section('title', 'Detail Produk | ')
 
@section('content')
    <!-- <h1 class="text-4xl font-semibold">Kertas Koran Bekas Murah Meriah Untuk Kerajinan Tangan</h1> -->
    <h1 class="text-4xl font-semibold">{{$produk->nama}}</h1>
    <div class="flex space-x-16 mt-8">
        <div class="flex flex-col w-full space-y-4">
            <img src="{{ asset($produk->gambar) }}">
            <div class="foto flex space-x-4">
                <span class="i-bi-people-circle w-12 h-12"></span>
                <div class="grid grid-rows-2">
                    <!-- <h1 class="font-semibold">Nama Toko</h1>
                    <h2>Kota Bandung</h2> -->
                    <h1 class="font-semibold">{{$produk->user->nama}}</h1>
                    <h2>{{$produk->user->alamatUser->kota}}</h2>
                </div>
            </div>
        </div>
        <div class="deskripsi">
            <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos accusamus fugit deserunt nam rerum soluta quo molestias laudantium, possimus eius minima unde! Quo illo architecto sed facilis ad natus minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ea maxime accusantium esse cum rerum quis quod repudiandae tempore quaerat, natus, molestiae quos sit laborum? Consectetur veniam officiis voluptatem! Expedita?</p> -->
            <p>{{$produk->deskripsi}}</p>
            <div class="grid grid-cols-4 mt-4">
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-mdi-recycle w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kategori</div>
                        <!-- <p class="font-semibold">Kertas</p> -->
                        <p class="font-semibold">{{$produk->kategoriSampah->nama}}</p>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-carbon-category w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Sub Kategori</div>
                        <!-- <p class="font-semibold">Kertas Koran</p> -->
                        <p class="font-semibold">{{$produk->nama_sub_kategori}}</p>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-ri-price-tag-3-line w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Harga</div>
                        <!-- <p class="font-semibold">Rp 5000/kg</p> -->
                        <p class="font-semibold">Rp {{number_format($produk->harga,2,',','.')}}/kg</p>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-material-symbols-weight-outline w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kuantitas</div>
                        <!-- <p class="font-semibold">100 Kg</p> -->
                        <p class="font-semibold">{{$produk->jumlah}} Kg</p>
                    </div>
                </div>
            </div>
            <div class="jumlah flex items-center mt-10 space-x-4">
                <h1>Jumlah</h1>
                <div class="border border-gray-200 rounded">
                    <div class="flex flex-row h-8 w-24 bg-transparent">
                        <button data-action="decrement" class="btn-minus bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-l cursor-pointer">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <!-- <input type="number" class="text-center w-full font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah" value="0"> -->
                        <input type="number" step="1" min="1" value="1" class="text-center w-full font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah">
                        <button data-action="increment" class="btn-plus bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <button class="items-center py-2 px-8 bg-[#FF8833] text-neutral-50 rounded-lg">Beli Sekarang</button>
                <button class="items-center py-2 px-8 border border-[#FF8833] text-[#FF8833] rounded-lg">Keranjang</button>
            </div>
        </div>
    </div>
    
    <!-- script buat kuantitas -->
    <script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        if(value == 1){
            target.value = 1;
        } else {
            value--;
            target.value = value;
        }
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>
@endsection 