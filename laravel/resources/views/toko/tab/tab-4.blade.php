<div x-show="current === 4" class="p-3 text-center mt-4">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium ">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1;?>
        @foreach($orders as $produk)
        @if($produk->itemOrder->first()->order->status == 'dikirim')
        <tr class="border text-center">
        <td class="px-3 py-3">{{$i}}</td>
          <td class="px-6 py-3">{{ \Carbon\Carbon::parse($produk->created_at)->format('Y/m/d') }}</td>
          <td class="px-6 py-3">...{{substr($produk->itemOrder->first()->id, -5)}}</td>
          <td class="px-6 py-3">{{$produk->itemOrder->first()->order->user->nama}}</td>
          <td class="px-6 py-3">{{$produk->itemOrder->first()->order->user->alamatUser->kota}}</td>
          <td class="px-6 py-3">Rp {{number_format($produk->itemOrder->first()->produk->harga * $produk->itemOrder->first()->jumlah,2,',','.')}}</td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
</div>