<div x-show="current === 2" class="p-3 text-center mt-2 md:mt-4">
  @if($orders->isEmpty())
  <img src="{{ asset('img/marketplace/clipboard.png') }}" class="w-32 mx-auto mt-12">
      <h1 class="mt-4 text-center">Belum ada pesanan</h1>
  @else
  <table class="w-full border-2 shadow">
      <thead>
        <tr class="border text-xs md:text-sm">
          <th scope="col" class="px-1.5 md:px-3 py-3 font-medium">No</th>
          <th scope="col" class="px-4 py-3 font-medium hidden md:table-cell">Tanggal</th>
          <th scope="col" class="md:px-3 py-3 font-medium">Id Order</th>
          <th scope="col" class="px-2 py-3 font-medium hidden md:table-cell">User Pembeli</th>
          <th scope="col" class="px-1 py-3 font-medium hidden md:table-cell">Alamat Pengiriman</th>
          <th scope="col" class="px-3 py-3 font-medium hidden md:table-cell">Total (Rp)</th>
          <th scope="col" class="md:px-3 py-3 font-medium whitespace-nowrap md:whitespace-normal">Bukti Bayar</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1;
      $kosong = true; ?>
      @foreach($orders as $produk)
        @if($produk->itemOrder->first()->order->pembayaran->status == 'belum_bayar' || $produk->itemOrder->first()->order->pembayaran->status == 'menunggu')
        <tr class="border text-center text-xs md:text-base">
          <td class="px-1.5 md:px-3 py-2">{{$i}}</td>
          <td class="px-2 py-2 hidden md:table-cell">{{ \Carbon\Carbon::parse($produk->created_at)->format('Y/m/d') }}</td>
          <td class="md:px-6 py-2">order-{{substr($produk->itemOrder->first()->id, 0,8)}}</td>
          <td class="px-2 py-2 hidden md:table-cell">{{$produk->itemOrder->first()->order->user->nama}}</td>
          <td class="px-1 py-2 hidden md:table-cell">{{$produk->itemOrder->first()->order->user->alamatUser->kota}}</td>
          <td class="px-3 py-2 hidden md:table-cell">Rp {{number_format($produk->itemOrder->first()->produk->harga * $produk->itemOrder->first()->jumlah,2,',','.')}}</td>
          <td class="md:px-6 py-2">
            @if($produk->itemOrder->first()->order->pembayaran->bukti_pembayaran)
            <a href="{{ route('download.image', ['path' => $produk->itemOrder->first()->order->pembayaran->bukti_pembayaran]) }}" class="flex justify-center">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
              <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
            </svg>
            </a></td>
            @else
                Belum ada
            @endif
        </tr>
        <?php $i++; 
        $kosong = false; ?>
        @endif
        @endforeach
      </tbody>
    </table>
    @endif
  </div>