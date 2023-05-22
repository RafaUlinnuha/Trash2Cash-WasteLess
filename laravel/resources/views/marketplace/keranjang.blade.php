@extends('layouts.base')
 
@section('title', 'Keranjang | ')
 
@section('content')
<h1 class="font-semibold text-4xl">Keranjang Saya</h1>
<table class="w-full text-left mt-8">
    <thead>
        <tr class="bg-white text-lg">
            <th scope="col"><input checked id="purple-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]"></th>
            <th scope="col" class="py-3 font-thin w-1/2">Produk</th>
            <th scope="col" class="py-3 font-thin">Harga</th>
            <th scope="col" class="py-3 font-thin">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input checked type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </td>
            <td class="py-3 font-medium text-lg">
                Anti Sampah
            </td>
            <td class="py-3 hidden"></td>
            <td class="py-3 hidden"></td>
        </tr>
        <tr>
            <td>
                <input checked type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </td>
            <td>
                <div class="flex flex-wrap space-x-6">
                    <img src="{{ asset('img/marketplace/produk-2.png') }}" class="rounded-xl w-[30%]">
                    <h1 class="w-[50%]">Kertas Koran Bekas Murah Untuk Kerjainan Tangan</h1>
                </div> 
            </td>
            
            <td class="align-text-top">
                Rp 3.000,-
            </td>
            <td class="align-text-top">
                <div class="border border-gray-200 rounded">
                    {{-- <div class="flex flex-row h-8 w-24 bg-transparent">
                        <button type="button" data-action="decrement" class="btn-minus bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 rounded-l cursor-pointer">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="number" step="1" min="1" value="1" class="text-center  font-semibold text-md hover:text-black focus:text-black items-center text-gray-700" name="jumlah">
                        <button type="button" data-action="increment" class="btn-plus bg-neutral-50 text-gray-600 hover:text-gray-700 hover:bg-gray-400 rounded-r cursor-pointer">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div> --}}

                    <div x-data="{count:0}">
                        <div class="flex items-center justify-center">
                            <button x-on:click="count++"
                                class="text-white bg-indigo-500 px-4 py-2 rounded hover:bg-indigo-900">+</button>
                            <span class="m-5" x-text="count">0</span>
                            <button x-on:click="count--"
                                class="text-white bg-indigo-500 px-4 py-2 rounded hover:bg-indigo-900">-</button>
                        </div>
                    </div>
            </td>
        </tr>
    </tbody>
</table>
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