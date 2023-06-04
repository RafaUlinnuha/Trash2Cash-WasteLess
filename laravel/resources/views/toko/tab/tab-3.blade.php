<div x-show="current === 3" class="p-3 text-center mt-2 md:mt-4">
  <table class="w-full border-2 py-8 shadow">
      <thead>
        <tr class="border text-sm md:text-xl">
          <th scope="col" class="px-1.5 md:px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Tanggal</th>
          <th scope="col" class="md:px-6 py-3 font-medium">Id Order</th>
          <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">User Pembeli</th>
          <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Alamat Pengiriman</th>
          <th scope="col" class="px-6 py-3 font-medium hidden md:table-cell">Total (Rp)</th>
          <th scope="col" class="px-6 py-3 font-medium">Status</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1;
      $kosong = true;
      ?>
      @foreach($orders as $produk)
        @if($produk->itemOrder->first()->order->pembayaran->status == 'selesai' && $produk->itemOrder->first()->order->status == 'diproses'  )
        <tr class="border text-center text-xs md:text-base">
          <td class="px-1.5 md:px-3 py-2">{{$i}}</td>
          <td class="px-3 py-2 hidden md:table-cell">{{ \Carbon\Carbon::parse($produk->created_at)->format('Y/m/d') }}</td>
          <td class="md:px-6 py-2">order-{{substr($produk->itemOrder->first()->id, 0,8)}}</td>
          <td class="px-3 py-2 hidden md:table-cell">{{$produk->itemOrder->first()->order->user->nama}}</td>
          <td class="px-3 py-2 hidden md:table-cell">{{$produk->itemOrder->first()->order->user->alamatUser->kota}}</td>
          <td class="px-3 py-2 hidden md:table-cell">Rp {{number_format($produk->itemOrder->first()->produk->harga * $produk->itemOrder->first()->jumlah,2,',','.')}}</td>
          <td>
            @include('toko.modal.modal-konfirmasikirim')
          </td>
        </tr>
        <?php $i++;
        $kosong = false; ?>
        @endif
        @endforeach
      </tbody>
    </table>
    @if($kosong)
      <img src="{{ asset('img/marketplace/clipboard.png') }}" class="w-32 mx-auto mt-12">
      <h1 class="mt-4 text-center">Belum ada pesanan</h1>
    @endif
  </div>