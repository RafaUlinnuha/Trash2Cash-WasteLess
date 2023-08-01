@extends('layouts.base')
 
@section('title', 'Register | ')
 
@section('content')
    <div class="max-w-sm mx-auto pt-10">
        <div class="text-center">
            <span class="i-mdi-people-group bg-[#6C894A] w-16 h-10 -mb-[6.6px]"></span>
        </div>
        <div class="bg-[#FF8833] max-h-full rounded-3xl px-6 md:px-8 pt-8 pb-8">
            <h1 class="text-center mb-8 font-bold text-lg lg:text-2xl text-white">Welcome to WasteLess!</h1>
            <h1 class="mb-2 font-semibold text-sm lg:text-lg text-white">Daftar Sebagai:</h1>
            <div class="gap-2 grid grid-rows-3">
                <button data-modal-target="register-modal" data-role="Bank Sampah" data-modal-toggle="register-modal" class="modal-button bg-[#6C894A] hover:bg-[#ABB955] items-center flex hover:text-[#6C894A] text-white p-4 rounded-lg transition duration-300" type="submit">
                    <svg class="w-5 h-5 md:w-6 md:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.876.517A1 1 0 0 0 17 0H3a1 1 0 0 0-.871.508C1.63 1.393 0 5.385 0 6.75a3.236 3.236 0 0 0 1 2.336V19a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V9.044a3.242 3.242 0 0 0 1-2.294c0-1.283-1.626-5.33-2.124-6.233ZM15.5 14.7a.8.8 0 0 1-.8.8h-2.4a.8.8 0 0 1-.8-.8v-2.4a.8.8 0 0 1 .8-.8h2.4a.8.8 0 0 1 .8.8v2.4ZM16.75 8a1.252 1.252 0 0 1-1.25-1.25 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0 1.25 1.25 0 0 1-2.5 0 1 1 0 0 0-2 0A1.252 1.252 0 0 1 3.25 8 1.266 1.266 0 0 1 2 6.75C2.306 5.1 2.841 3.501 3.591 2H16.4A19.015 19.015 0 0 1 18 6.75 1.337 1.337 0 0 1 16.75 8Z"/>
                    </svg>
                    <h1 class="lg:text-lg font-medium mx-4">
                        Bank Sampah
                    </h1>
                </button>
                <button data-modal-target="register-modal" data-role="Anggota Bank Sampah" data-modal-toggle="register-modal" class="modal-button bg-[#6C894A] hover:bg-[#ABB955] items-center flex hover:text-[#6C894A] text-white p-4 rounded-lg transition duration-300" type="submit">
                    <svg class="w-5 h-5 md:w-6 md:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                        <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                        <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                    </svg>
                    <h1 class="lg:text-lg font-medium mx-4">
                        Anggota Bank Sampah
                    </h1>
                </button>
                <button data-modal-target="register-modal" data-role="Pembeli" data-modal-toggle="register-modal" class="modal-button bg-[#6C894A] hover:bg-[#ABB955] items-center flex hover:text-[#6C894A] text-white p-4 rounded-lg transition duration-300" type="submit">
                    <svg class="w-5 h-5 md:w-6 md:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                    </svg>
                    <h1 class="lg:text-lg font-medium mx-4">
                        Pembeli
                    </h1>
                </button>
            </div>
            <h1 class="text-center text-xs mt-4 space-x-1">
                <span>Sudah punya akun?</span>
                <a class="underline hover:text-gray-50" href="{{route('login.view')}}">
                    Masuk
                </a> 
            </h1>
        </div>
        @include('auth.modal.register-modal')
    </div>

    <script type="text/javascript">
    @if (count($errors) > 0)
    document.addEventListener("DOMContentLoaded", function() {
        const registerModal = document.getElementById('register-modal');
        registerModal.classList.add('flex');
        registerModal.classList.remove('hidden');
    });
    @endif

    // Get all modal buttons
    const modalButtons = document.querySelectorAll('.modal-button');

    // Attach click event listener to each button
    modalButtons.forEach(button => {
        button.addEventListener('click', function() {
            const role = this.getAttribute('data-role');
            document.getElementById('roleInput').value = role;
        });
    });
</script>

@endsection 