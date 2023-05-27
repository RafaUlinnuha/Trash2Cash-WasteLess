@extends('layouts.base')
 
@section('title', 'Edit Profil | ')
 
@section('content')
    <h1 class="text-4xl font-semibold">Ubah Profil</h1>
    <div class="foto items-center flex flex-col space-y-8">
        <span class="i-bi-people-circle w-48 h-48"></span>
        <button class="py-2 px-16 text-center p-4 bg-[#8092C1] hover:bg-[#7588BB] rounded-xl text-neutral-50">Ubah Foto</button>
    </div>
    <div class="grid grid-cols-2 mt-12 gap-12">
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Data Pribadi</h1>
            <hr class="mt-2">
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">Nama</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 placeholder-gray-600 border rounded-lg border-gray-300" type="text" placeholder="Nama sebelumnya">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/3 text-lg">No Telepon</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg border-gray-300" type="text" placeholder="No telepon sebelumnya">
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-1/3 text-lg items-start">Email</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base placeholder-gray-600 border rounded-lg border-gray-300" type="email" placeholder="Email sebelumnya">
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-2xl transition ease-in-out delay-150 duration-300">Simpan</button>
        </div>
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Kata Sandi</h1>
            <hr class="mt-2">
            <form action="" method="post">
                @csrf
                <div class="space-y-4 mt-4">
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kata Sandi Lama</div>
                        <div class="w-2/3">
                            <input name="current_password" class="h-10 w-full px-3 border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kata Sandi Baru</div>
                        <div class="w-2/3">
                            <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Konfirmasi Kata Sandi</div>
                        <div class="w-2/3">
                            <input name="new_password" class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                </div>
                <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-2 mt-12 gap-12">
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Tambah Rekening Bank</h1>
            <hr class="mt-2">
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">No Rekening</div>
                    <div class="w-2/3">
                        <input name="new_password_confirm" class="h-10 w-full px-3 border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Nama Bank</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Nama Pemilik Rekening</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
        </div>
        <div class="data border-2 py-8 px-12 shadow">
            <h1 class="text-2xl font-medium">Ubah Alamat</h1>
            <hr class="mt-2">
            <div class="space-y-4 mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/2 text-lg">Alamat</div>
                    <div class="w-2/3">
                        <input class="h-10 w-full px-3 border rounded-lg border-gray-300" type="text">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kecamatan</div>
                        <div class="w-2/3">
                            <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>                    
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kota</div>
                        <div class="w-2/3">
                            <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Provinsi</div>
                        <div class="w-2/3">
                            <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="w-1/2 text-lg">Kode Pos</div>
                        <div class="w-2/3">
                            <input class="h-10 w-full px-3 text-base border rounded-lg border-gray-300" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-2 px-8 bg-[#8092C1] hover:bg-[#7588BB] text-neutral-50 rounded-xl transition ease-in-out delay-150 duration-300">Simpan</button>
        </div>
    </div>
    <table class="mt-12 w-full border-2 py-8 px-12 shadow">
        <thead>
          <tr class="bg-white border-b text-xl">
            <th scope="col" class="px-6 font-medium">No</th>
            <th scope="col" class="px-6 py-3 font-medium">No Rekening</th>
            <th scope="col" class="px-6 py-3 font-medium">Nama Bank</th>
            <th scope="col" class="px-6 py-3 font-medium">Nama Pemilik Rekening</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b">
            <td class="px-6 py-3">1</td>
            <td class="px-6 py-3">43559483413</td>
            <td class="px-6 py-3">BCA</td>
            <td class="px-6 py-3">Malcolm Lockyer</td>
            <td class="py-3">
                <!-- Modal toggle -->
                <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="block text-white bg-blue-600 hover:bg-blue-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                    Edit
                </button>

                <!-- Main modal -->
                <div id="edit-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-8 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="edit-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 text-center">Edit Rekening Bank</h3>
                                <form>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " required />
                                    <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Rekening</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " required />
                                    <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Bank</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " required />
                                    <label for="floating_nama_barang" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Pemilik Rekening</label>
                                </div>
                                <button type="submit" class="mt-4 w-full text-white bg-[#8092C1] hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="py-3">
                <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="block text-white bg-red-600 hover:bg-red-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                    Delete
                </button>
                
                <div id="delete-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="delete-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda yakin ingin menghapus rekening bank ini?</h3>
                                <button data-modal-hide="delete-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Iya, saya yakin
                                </button>
                                <button data-modal-hide="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak, batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
@endsection 