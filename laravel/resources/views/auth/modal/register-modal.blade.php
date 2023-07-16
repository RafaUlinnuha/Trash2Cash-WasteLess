<!-- Main modal -->
<div id="register-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#FF8833] rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-900 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="register-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <!-- <h3 class="mb-4 text-gray-900 dark:text-white">Register</h3> -->
                <form action="{{route('register.post')}}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-8 text-center md:text-xl">
                        <span class="font-medium text-slate-50 md:font-semibold">Daftar</span>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 md:pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-[#C7C7C7] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                            <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                            <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                        </svg>
                        </div>
                        <div class="mb-6">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 md:pl-10 p-1.5 md:p-2.5" name="role" id="roleInput" value="{{ old('role') }}" type="text" readonly>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 md:pl-3 pointer-events-none">
                            <span class="i-mdi-people-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                        </div>
                        <div class="{{ $errors->has('nama') ? '' : 'mb-6'}} ">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 md:pl-10 p-1.5 md:p-2.5" name="nama" type="text" value="{{ old('nama') }}" placeholder="Nama Pengguna">
                        </div>
                    </div>
                    @error('nama')
                    <span class=" px-2 inline-flex text-xs text-slate-50">{{$message}}</span>
                    @enderror
                    <div class="relative {{ $errors->has('nama') ? 'mt-2' : ''}}">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 md:pl-3 pointer-events-none">
                            <span class="i-mdi-email-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                        </div>
                        <div class="{{ $errors->has('email') ? '' : 'mb-6'}} ">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 md:pl-10 p-1.5 md:p-2.5" name="email" type="text" value="{{ old('email') }}" placeholder="Email">
                        </div>
                    </div>
                    @error('email')
                    <span class=" px-2 inline-flex text-xs text-slate-50">{{$message}}</span>
                    @enderror
                    <div class="relative {{ $errors->has('email') ? 'mt-2' : ''}}">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 md:pl-3 pointer-events-none">
                            <span class="i-mdi-telephone-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                        </div>
                        <div class="{{ $errors->has('no_hp') ? '' : 'mb-6'}} ">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 md:pl-10 p-1.5 md:p-2.5" name="no_hp" type="number" value="{{ old('no_hp') }}" placeholder="No Telepon">
                        </div>
                    </div>
                    @error('no_hp')
                    <span class=" px-2 inline-flex text-xs text-slate-50">{{$message}}</span>
                    @enderror
                    <div class="relative {{ $errors->has('no_hp') ? 'mt-2' : ''}}">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 md:pl-3 pointer-events-none">
                            <span class="i-mdi-password-outline w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                        </div>
                        <div class="{{ $errors->has('password') ? '' : 'mb-6'}} "  x-data="{ show: true }">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 md:pl-10 p-1.5 md:p-2.5" name="password" type="password" placeholder="Kata Sandi":type="show ? 'password' : 'text'">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                <span class="i-bi-eye h-6 text-gray-700" @click="show = !show"
                                :class="{'block': !show, 'hidden':show }"></span>    
                                <span class="i-carbon-view-off h-6 text-gray-700" @click="show = !show"
                                :class="{'hidden': !show, 'block':show }"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <span class="px-2 inline-flex text-xs text-slate-50">{{$message}}</span>
                    @enderror
                    <div class="relative {{ $errors->has('password') ? 'mt-2' : ''}}">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 md:pl-3 pointer-events-none">
                            <span class="i-mdi-password w-5 h-5 bg-[#C7C7C7] text-6xl"></span>
                        </div>
                        <div class="{{ $errors->has('confirm_password') ? '' : 'mb-6'}}" x-data="{ show: true }">
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 md:pl-10 p-1.5 md:p-2.5" name="confirm_password" type="password" placeholder="Konfirmasi Kata Sandi":type="show ? 'password' : 'text'">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                <span class="i-bi-eye h-6 text-gray-700" @click="show = !show"
                                :class="{'block': !show, 'hidden':show }"></span>    
                                <span class="i-carbon-view-off h-6 text-gray-700" @click="show = !show"
                                :class="{'hidden': !show, 'block':show }"></span>
                            </div>
                        </div>
                    </div>
                    @error('confirm_password')
                    <span class=" px-2 inline-flex text-xs text-slate-50">{{$message}}</span>
                    @enderror
                    <div class="{{ $errors->has('confirm_password') ? 'mt-7' : 'mt-10'}} flex flex-col items-center justify-center">
                        <button class="bg-[#6C894A] hover:bg-[#ABB955] text-white font-semibold py-1 px-6 rounded transition duration-300" type="submit">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 