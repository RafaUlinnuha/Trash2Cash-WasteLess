@extends('layouts.base')
 
@section('title', 'Detail Produk | ')
 
@section('content')
    <h1 class="text-4xl font-semibold">{{$produk->nama}}</h1>
    <div class="grid grid-cols-3 mt-8">
        <div class="flex flex-col w-full space-y-4 justify-center">
            <img src="{{ asset($produk->gambar) }}" class="w-[80%]">
            <div class="foto flex space-x-4">
                <span class="i-bi-people-circle w-12 h-12"></span>
                <div class="grid grid-rows-2">
                    <h1 class="font-semibold">{{$produk->user->nama}}</h1>
                    <h2>{{$produk->user->alamatUser->kota}}</h2>
                </div>
            </div>
        </div>
        <div class="deskripsi col-span-2">
            <p>{{$produk->deskripsi}}</p>
            <div class="grid xl:grid-cols-4 grid-cols-2 gap-4 mt-4">
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-mdi-recycle w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kategori</div>
                        <p class="font-semibold line-clamp-1">{{$produk->kategoriSampah->nama}}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-carbon-category w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Sub Kategori</div>
                        <!-- <p class="font-semibold">Kertas Koran</p> -->
                        <p class="font-semibold line-clamp-1">{{$produk->nama_sub_kategori}}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="bg-[#8092C1] p-2 rounded">
                        <span class="i-ri-price-tag-3-line w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Harga</div>
                        <!-- <p class="font-semibold">Rp 5000/kg</p> -->
                        <p class="font-semibold line-clamp-1">Rp {{number_format($produk->harga,2,',','.')}}/kg</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="box bg-[#8092C1] p-2 rounded">
                        <span class="i-material-symbols-weight-outline w-8 h-8"></span>
                    </div>
                    <div>
                        <div class="h1">Kuantitas</div>
                        <!-- <p class="font-semibold">100 Kg</p> -->
                        <p class="font-semibold line-clamp-1">{{$produk->jumlah}} Kg</p>
                    </div>
                </div>
            </div>
            <form method="post" action="{{route('keranjang.post', ['id' => $produk->id])}}">
            @csrf    
                <div class="jumlah flex items-center mt-10 space-x-4">
                    <h1>Jumlah</h1>
                    <div class="border border-gray-200 rounded">
                        <div class="flex flex-row h-8 w-24 bg-transparent">
                            <button type="button" data-action="decrement" class="btn-minus bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-l cursor-pointer">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <!-- <input type="number" class="text-center w-full font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah" value="0"> -->
                            <input type="number" step="1" min="1" value="1" class="text-center w-full font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah">
                            <button type="button" data-action="increment" class="btn-plus bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 w-full rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <!-- <button type="submit" formaction="" class="items-center py-2 px-8 bg-[#FF8833] text-neutral-50 rounded-lg">Beli Sekarang</button> -->
                    <!-- <button type="submit" formaction="{{route('keranjang.post', ['id' => $produk->id])}}" class="items-center py-2 px-8 border border-[#FF8833] text-[#FF8833] rounded-lg">Keranjang</button> -->
                    <button type="submit" name="action" value="beli_skrg" class="items-center py-2 px-8 bg-[#FF8833] text-neutral-50 rounded-lg">Beli Sekarang</button>
                    <button type="submit" name="action" value="tambah_keranjang" class="items-center py-2 px-8 border border-[#FF8833] text-[#FF8833] rounded-lg">Keranjang</button>
                </div>
            </form>
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