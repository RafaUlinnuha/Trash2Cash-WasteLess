<button data-modal-target="ganti-foto" data-modal-toggle="ganti-foto" class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50" type="button">
  Ubah Foto
</button>

<!-- Main modal -->
<div id="ganti-foto" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="ganti-foto">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Upload Foto Profil</h3>
                <form action="{{route('fotoprofil.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="dropzone flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100"> 
                            <div id="image-dropzone" class="flex flex-col items-center justify-center py-12">
                                <img id="uploaded-image" class="hidden object-cover mx-auto p-4 max-w-xs rounded-md" />
                                <p id="image-name" class="hidden mt-2 text-sm text-gray-500 mb-2"></p>
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                                <p class="text-xs text-gray-500">PNG atau JPG</p>
                            </div>
                            <input type="file" id="dropzone-file" name="gambar" accept="image/*" class="hidden" required />
                        </label>
                    </div> 
                    <button type="submit" class="mt-4 w-full text-white bg-[#8092C1] hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
var dropzoneFile = document.getElementById('dropzone-file');
var uploadedImage = document.getElementById('uploaded-image');
var imageName = document.getElementById('image-name');

dropzoneFile.addEventListener('change', function(event) {
  var file = event.target.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function(e) {
      uploadedImage.src = e.target.result;
      uploadedImage.classList.remove('hidden');
      imageName.textContent = file.name;
      imageName.classList.remove('hidden');
    }
    reader.readAsDataURL(file);
  }
});
</script>