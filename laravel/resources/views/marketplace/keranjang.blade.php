@extends('layouts.base')
 
@section('title', 'Keranjang | ')
 
@section('content')
<h1 class="font-semibold text-4xl">Keranjang Saya</h1>
<form action="{{route('order.post')}}" method="post">
@csrf
<table class="w-full text-left mt-8">
    @if($keranjang->itemKeranjang->isEmpty())
    <br>
    <p class="text-lg">Tidak ada produk dalam keranjang.</p>
    @else
    <thead>
        <tr class="bg-white text-lg">
            <th scope="col"><input id="select-all" type="checkbox" value="" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
            </th>
            <th scope="col" class="py-3 font-thin w-1/2">Produk</th>
            <th scope="col" class="py-3 font-thin text-center">Harga</th>
            <th scope="col" class="py-3 font-thin text-center">Jumlah</th>
        </tr>
    </thead>
    @foreach($keranjang->itemKeranjang as $item)
    <tbody>
        <tr>
            <td>
            </td>
            <td class="py-3 font-medium text-lg">
                {{$item->produk->user->nama}}
            </td>
            <td class="py-3 hidden"></td>
            <td class="py-3 hidden"></td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" value="{{$item->id}}" name="checkboxes[]" class="w-4 h-4 text-[#8092C1] bg-gray-100 border-gray-300 rounded focus:ring-[#8092C1]">
                <input type="hidden" name="labels[]" value="{{$item->jumlah*$item->produk->harga}}" />
            </td>
            <td>
                <div class="flex flex-wrap space-x-6">
                    <img src="{{asset('storage/'.$item->produk->gambar)}}" class="rounded-xl w-[30%]">
                    <h1 class="w-[50%]">{{$item->produk->nama}}</h1>
                </div> 
            </td>
            <td class="align-text-top text-center">
                Rp {{number_format($item->produk->harga,2,',','.')}}
            </td>
            <td class="align-text-top">
                <div class="border w-[50%] mx-auto">
                    <div class="flex items-center justify-between">
                        <a href="{{route('produk.dec', ['id' => $item->id])}}" class="bg-white px-2 cursor-pointer border-r py-1">-</a>
                        <input type="number" name="jumlah" class="w-[80%] text-center py-0 border-transparent focus:border-transparent focus:ring-0" readonly min="1" max="{{$item->produk->jumlah}}" value="{{$item->jumlah}}">
                        <a href="{{route('produk.inc', ['id' => $item->id])}}" class="bg-white px-2 cursor-pointer border-r py-1">+</a>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
    @endif
</table>
<div class="flex items-center mt-8 space-x-4">
    <div class="px-10 py-3 rounded-lg border border-gray-200 shadow flex justify-between font-medium xl:w-3/4 w-2/3">
        <h1 class="text-lg">Total Pembayaran</h1>
        <h1 id="total">Rp 0</h1>
    </div>
    <div class="text-right">
        <button type="submit" disabled id = "submit-btn" class="px-10 py-3 font-medium text-center text-lg bg-[#FF8833] text-neutral-50 rounded-lg transition ease-in-out delay-150 duration-300">
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
