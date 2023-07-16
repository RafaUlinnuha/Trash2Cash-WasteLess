<!-- Main modal -->
<div id="editproduk-modal{{$item->id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-8 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="editproduk-modal{{$item->id}}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Edit Produk</h3>
                <form action="{{route('penjualan.edit', $item->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="relative z-0 w-full mb-6 group">
                      <input type="text" name="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " value="{{$item->nama}}" required />
                      <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Barang</label>
                  <div class="relative z-0 w-full mt-2 mb-6 group">
                      <label for="kategori" class="block text-left mt-3 mb-2 text-xs text-gray-500 dark:text-white">Kategori</label>
                      <select name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Plastik</option>
                        <option>Kertas</option>
                        <option>Elektronik</option>
                        <option>Kaca dan Kaleng</option>
                      </select>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                      <input name="nama_sub_kategori" type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " value="{{$item->nama_sub_kategori}}" required />
                      <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sub Kategori</label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="jumlah" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " value="{{$item->jumlah}}" required />
                    <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kuantitas (Kg)</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " value="{{$item->harga}}" required />
                    <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga (Rp)</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                  <label id="deskripsi" class="block text-sm text-gray-500 mb-2">Deskripsi</label>
                  <textarea name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="">{{$item->deskripsi}}</textarea>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                  <h3 class="text-sm text-gray-500 mb-2">Ubah Gambar</h3>
                  <div class="relative z-0 w-full mb-6 group">
                    <img src="{{asset('storage/'.$item->gambar)}}" alt="" class="p-4 mx-auto">
                  </div> 
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file1" class="dropzone flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100"> 
                      <div id="image-dropzone" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <img id="uploaded-image1" class="hidden object-cover mx-auto p-4 max-w-xs rounded-md" />
                        <p id="image-name1" class="hidden mt-2 text-sm text-gray-500 mb-2"></p>
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 px-4 md:px-0 text-center"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                        <p class="text-xs text-gray-500">PNG atau JPG</p>
                      </div>
                      <input type="file" id="dropzone-file1" name="gambar" accept="image/*" class="hidden" />
                    </label>
                  </div>
                </div> 
                <button type="submit" class="mt-4 w-full text-white bg-[#8092C1] hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                </form>
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
