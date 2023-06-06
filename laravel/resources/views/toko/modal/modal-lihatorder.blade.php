<td class="w-1/12 px-2 md:px-6 py-3 md:hidden">
  <a data-modal-target="#lihatorder-modal" data-modal-toggle="lihatorder-modal" class="block md:hidden text-white bg-green-600 hover:bg-green-700 focus:outline-none font-medium rounded-lg text-xs md:text-sm px-2 py-2 md:px-5 md:py-2.5 text-center">Detail</a>
</td>
<!-- Main modal -->
<div id="lihatorder-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-8 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="lihatorder-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Lihat Order</h3>
                <div class="z-0 w-full mb-6 group">
                  <label class="text-sm">Tanggal</label>
                  <span class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0">{{ \Carbon\Carbon::parse($item->created_at)->format('Y/m/d') }}</span>
              </div>
            <div class="z-0 w-full mb-6 group">
                <label class="text-sm">Order ID</label>
                <span class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0">order-{{substr($item->id,0,6)}}</span>
            </div>
            <div class="z-0 w-full mb-6 group">
              <label class="text-sm">Jumlah</label>
              <span class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0">{{$item->jumlah}} Kg</span>
            </div>
            <div class="z-0 w-full mb-6 group">
              <label class="text-sm">Total</label>
              <span class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0">Rp {{number_format($item->jumlah*$item->produk->harga,2,',','.')}}</span>
            </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var dropzoneFile1 = document.getElementById('dropzone-file1');
var uploadedImage1 = document.getElementById('uploaded-image1');
var imageName1 = document.getElementById('image-name1');

dropzoneFile1.addEventListener('change', function(event) {
  var file = event.target.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function(e) {
      uploadedImage1.src = e.target.result;
      uploadedImage1.classList.remove('hidden');
      imageName1.textContent = file.name;
      imageName1.classList.remove('hidden');
    }
    reader.readAsDataURL(file);
  }
});

</script>
