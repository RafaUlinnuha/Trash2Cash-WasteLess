<div x-show="current === 2" class=" mt-4 relative overflow-x-auto">
    <table class="w-full border-2 py-8 px-12 shadow">
      <thead>
        <tr class="border text-base">
          <th scope="col" class="px-2 py-3 font-medium">No</th>
          <th scope="col" class=" px-3 py-3 font-medium">Tanggal</th>
          <th scope="col" class=" px-3 py-3 font-medium">Id Order</th>
          <th scope="col" class=" px-3 py-3 font-medium">User Pembeli</th>
          <th scope="col" class=" px-3 py-3 font-medium">Alamat Pengiriman</th>
          <th scope="col" class=" px-3 py-3 font-medium">Total (Rp)</th>
          <th scope="col" class=" px-3 py-3 font-medium">Bukti Bayar</th>
          <th scope="col" class=" px-3 py-3 font-medium"></th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1 ?>
      @foreach($orders as $produk)
        @if($produk->itemOrder->first()->order->pembayaran->status == 'belum_bayar' || $produk->itemOrder->first()->order->pembayaran->status == 'menunggu')
        <tr class="border text-center">
          <td class="px-3 py-3">{{$i}}</td>
          <td class="px-3 py-3">{{ \Carbon\Carbon::parse($produk->created_at)->format('Y/m/d') }}</td>
          <td class="px-3 py-3">...{{substr($produk->itemOrder->first()->id, -5)}}</td>
          <td class="px-3 py-3">{{$produk->itemOrder->first()->order->user->nama}}</td>
          <td class="px-3 py-3">{{$produk->itemOrder->first()->order->user->alamatUser->kota}}</td>
          <td class="px-3 py-3">Rp {{number_format($produk->itemOrder->first()->produk->harga * $produk->itemOrder->first()->jumlah,2,',','.')}}</td>
          <td class="px-3 py-3">
            @if($produk->itemOrder->first()->order->pembayaran->bukti_pembayaran)
            <button class="items-center py-2 px-4 bg-[#8092C1] text-neutral-50 rounded-lg">Unduh File</button></td>
            @else
                belum ada
            @endif
            <td class="px-4 py-3">
            @include('toko.modal.modal-konfirmasipembayaran')
          </td>
        </tr>
        @endif
        <?php $i++; ?>
        @endforeach
      </tbody>
    </table>
  </div>