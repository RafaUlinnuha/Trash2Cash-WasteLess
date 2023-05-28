<div x-show="current === 1" class=" mt-4 relative overflow-x-auto">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
          <th scope="col" class="px-6 py-3 font-medium">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium">Total (Rp)</th>
          <th scope="col" class="px-6 py-3 font-medium">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 ?>
        @foreach($orders as $produk)
        <tr class="border text-center">
          <td class="px-3 py-2">{{$i}}</td>
          <td class="px-3 py-2">{{ \Carbon\Carbon::parse($produk->created_at)->format('Y/m/d') }}</td>
          <td class="px-3 py-2">...{{substr($produk->itemOrder->first()->id, -5)}}</td>
          <td class="px-3 py-2">{{$produk->itemOrder->first()->order->user->nama}}</td>
          <td class="px-3 py-2">{{$produk->itemOrder->first()->order->user->alamatUser->kota}}</td>
          <td class="px-3 py-2">Rp {{number_format($produk->itemOrder->first()->produk->harga * $produk->itemOrder->first()->jumlah,2,',','.')}}</td>
          @if($produk->itemOrder->first()->order->pembayaran->status == 'belum_bayar')
          <td class="px-3 py-2">belum bayar</td>
          @elseif($produk->itemOrder->first()->order->pembayaran->status == 'selesai' && $produk->itemOrder->first()->order->status == 'dikirim' )
          <td class="px-3 py-2">dikirim</td>
          @elseif($produk->itemOrder->first()->order->status == 'diproses' )
          <td class="px-3 py-2">diproses</td>
          @else
          <td class="px-3 py-2">{{$produk->itemOrder->first()->order->pembayaran->status}}</td>
          @endif
        </tr>
        <?php $i++; ?>
        @endforeach
      </tbody>
    </table>
</div>