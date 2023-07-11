@extends('layouts.base')
 
@section('title', 'Keranjang | ')
 
@section('content')
<h1 class="text-3xl lg:text-4xl font-semibold text-center md:text-left">Keranjang Saya</h1>
<form action="{{route('order.post')}}" method="post">
@csrf
<table class="w-full text-left mt-8">
    @if(isset($keranjang))
    @if($keranjang->itemKeranjang->isEmpty())
    <br>
    <p class="text-sm md:text-lg">Tidak ada produk dalam keranjang.</p>
    @else
    <thead>
        <tr class="bg-white text-sm md:text-lg">
            <th scope="col"><input id="select-all" type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </th>
            <th class="py-3 font-thin pl-2 md:pl-0 md:w-1/2">Produk</th>
            <th scope="col" class="py-3 font-thin text-center hidden md:table-cell">Harga</th>
            <th scope="col" class="py-3 font-thin text-center hidden md:table-cell">Jumlah</th>
        </tr>
    </thead>
    @foreach($keranjang->itemKeranjang as $item)
    <tbody>
        <tr>
            <td>
            </td>
            <td class="py-3 font-medium pl-2 md:pl-0 text-sm md:text-lg">
                {{$item->produk->user->nama}}
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" value="{{$item->id}}" name="checkboxes[]" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
                <input type="hidden" name="labels[]" value="{{$item->jumlah*$item->produk->harga}}" />
            </td>
            <td>
                <div class="flex flex-wrap ml-2 md:ml-0 md:space-x-4 space-y-2 md:space-y-0">
                    <img src="{{asset('storage/'.$item->produk->gambar)}}" class="rounded-xl w-48 md:w-36 h-32 md:h-28">
                    <h1 class="text-sm md:text-base md:w-[60%]">{{$item->produk->nama}}</h1>
                </div> 
            </td>
            <td class="align-text-top text-sm md:text-base text-center hidden md:table-cell">
                Rp {{number_format($item->produk->harga,2,',','.')}}
            </td>
            <td class="align-text-top hidden md:table-cell">
                <div class="border md:w-[50%] mx-auto">
                    <div class="flex items-center justify-between">
                        <a href="{{route('produk.dec', ['id' => $item->id])}}" class="bg-white p-1 md:px-2 cursor-pointer border-r md:py-1 text-sm md:text-base">-</a>
                        <input type="number" name="jumlah" class="md:w-[80%] w-10 text-center py-0 border-transparent focus:border-transparent focus:ring-0 text-sm md:text-base" readonly min="1" max="{{$item->produk->jumlah}}" value="{{$item->jumlah}}">
                        <a href="{{route('produk.inc', ['id' => $item->id])}}" class="bg-white p-1 md:px-2 cursor-pointer border-l md:py-1 text-sm md:text-base">+</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td class="flex mt-1 items-center ml-2 md:hidden">
                <div class="text-sm w-2/3 font-medium">
                    Rp {{number_format($item->produk->harga,2,',','.')}}
                </div>
                <div class="border mx-auto">
                    <div class="flex items-center justify-between">
                        <a href="{{route('produk.dec', ['id' => $item->id])}}" class="bg-white p-1 md:px-2 cursor-pointer border-r md:py-1 text-sm md:text-base">-</a>
                        <input type="number" name="jumlah" class="md:w-[80%] w-10 text-center py-0 border-transparent focus:border-transparent focus:ring-0 text-sm md:text-base" readonly min="1" max="{{$item->produk->jumlah}}" value="{{$item->jumlah}}">
                        <a href="{{route('produk.inc', ['id' => $item->id])}}" class="bg-white p-1 md:px-2 cursor-pointer border-l md:py-1 text-sm md:text-base">+</a>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
    @endif
    @endif
</table>
<div class="flex flex-col md:flex-row items-center mt-8 space-y-4 md:space-y-0 md:space-x-4">
    <div class="md:px-10 px-4 py-3 rounded-lg border border-gray-200 shadow flex justify-between font-medium xl:w-3/4 md:w-2/3 w-full items-center">
        <h1 class="text-sm md:text-lg">Total Pembayaran</h1>
        <h1 id="total" class="text-sm md:text-lg w-fit">Rp 0</h1>
    </div>
    <div class="text-right xl:w-1/4 md:w-1/3 w-full">
        <button type="submit" disabled id = "submit-btn" class="md:px-12 py-3 font-medium text-center text-sm md:text-base lg:text-lg bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300 w-full">
            Bayar Sekarang
         </button>
    </div>
</div>
</form>
<script>
    const selectAllCheckbox = document.getElementById('select-all');
    const checkboxes = document.querySelectorAll('input[name="checkboxes[]"]');
    const submitButton = document.getElementById('submit-btn');
    const labels = document.querySelectorAll('input[name="labels[]"]');

    // Add event listener to the "Select All" checkbox
    selectAllCheckbox.addEventListener('change', function () {
    checkboxes.forEach(function (checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
    updateTotal();
    updateButtonStatus();
    });

    // Add event listener to checkboxes
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            updateSelectAllCheckbox();
            updateTotal();
            updateButtonStatus();
        });
    });

    // Function to update the "Select All" checkbox based on the selected checkboxes
    function updateSelectAllCheckbox() {
    const allChecked = Array.from(checkboxes).every(function (checkbox) {
        return checkbox.checked;
    });
        
    selectAllCheckbox.checked = allChecked;
    }

    // Function to update the total based on the selected checkboxes' hidden labels
    function updateTotal() {
    let sum = 0;

    checkboxes.forEach(function (checkbox, index) {
        if (checkbox.checked) {
            sum += parseInt(labels[index].value);
        }
    });

    // Update the total element with the sum
    document.getElementById('total').textContent = sum.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });;
    }

    // Function to update the button status based on checkbox selection
    function updateButtonStatus() {
        const checkedCount = Array.from(checkboxes).filter(function (checkbox) {
            return checkbox.checked;
        }).length;
        if(checkedCount > 0){
            submitButton.disabled = false;
        }
        else{
            submitButton.disabled = true;
        }
        }
        

</script>
@endsection 
