<div x-show="current === 2" class="py-3 mt-4">
    <?php?>
    <?php $kosong = true; ?>
    @foreach($orders as $order)
    @if ($order->pembayaran->status == 'belum_bayar')
    <?php $jumlah=0 ?>
    <div class="shop-2">
      <div class="flex space-x-4 items-center">
        <span class="i-solar-shop-2-linear w-6 h-6"></span>
        <h1 class="font-semibold my-auto" >order-{{substr($order->id,0,8)}}</h1>
        <h1 class="items-center mx-auto p-2 text-sm font-medium text-center text-white bg-[#8092C1] rounded-lg">{{$order->pembayaran->status == 'belum_bayar'? 'belum bayar' : $order->pembayaran->status}}</h1> 
        @include('user.modal.modal-batalkan')
      </div>
    </div>
    <div class="m-4">
      @foreach($order->itemOrder as $item)
      <div class="shop-2 mt-3">
        <div class="flex space-x-4 items-center">
          <span class="i-solar-shop-2-linear w-6 h-6"></span>
          <h1 class="font-semibold">{{$item->produk->user->nama}}</h1>
        </div>
      </div>
      <div class="flex flex-wrap justify-between mt-4">
        <div class="flex space-x-6">
            <img src="{{asset('storage/'.$item->produk->gambar)}}" class="rounded-xl w-48 h-32">
            <div class="flex-rows">
                <h1>{{$item->produk->nama}}</h1>
                <h2>Jumlah : {{$item->jumlah}} Kg</h2>
            </div>
        </div>
        <div class="flex space-x-2 mt-auto">
          <h3 class="text-right">Harga : </h3>
          <h4 class="text-[#FF8833]">Rp {{number_format($item->produk->harga,2,',','.')}}/Kg</h4>
        </div>
      <?php $jumlah+=$item->produk->harga*$item->jumlah ?>
    </div>
    @endforeach 
      <div class="produk-3">
        <div class="flex justify-end space-x-6 mt-4 items-center">
          <div class="flex space-x-2"> 
            <h3 class="text-right font-semibold">Total Pesanan : </h3>
            <h4 class="text-[#FF8833] font-medium">Rp {{number_format($jumlah,2,',','.')}}</h4>
          </div>
          <!-- Modal toggle -->
          @include('user.modal.modal-bayar')
         </div>
        </div>
      </div>
        @endif
  @endforeach
  </div>