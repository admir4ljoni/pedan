@extends('template.adminSideBar')
@section('title', 'Tentang Kami')

@section('content')
    <div class="">

        <div class="">
            <h2 class="text-2xl font-extrabold uppercase mb-4">Tentang smkn 1 pedan</h2>
            <button type="submit" id="tambahData"
                class="mb-10 flex w-auto justify-center rounded-md bg-secondaryColor hover:bg-yellow-500 px-3 py-3 text-md font-bold leading-6 text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">
                <span class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                </span>
                Tambah 
            </button>

            <x-alertHapus />

            {{-- modal tambah data --}}
            <x-modal title="TAMBAH DATA" id="modalTambah">
                <x-slot name="content">
                    <div class="mb-10">
                        <x-input id="jadwal" name="jadwal" type="file" title="Upload Jadwal" />
                        <x-input id="nama" name="nama" type="text" title="Nama Jadwal" />
                </x-slot>
            </x-modal>
        </div>

        <div class="flex flex-col md:flex-row gap-3">

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // fungsi untuk modal delete
            const modal = document.getElementById('popup-modal');
            const iconTrash = document.querySelector('.icon-tabler-trash');
            iconTrash.addEventListener('click', function() {
                modal.classList.remove('hidden');
            });
            // tombol close modal hapus
            const closeButton = modal.querySelector('[data-modal-hide="popup-modal"]');
            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

            // Fungsi untuk modal tambahData
            const modalTambah = document.getElementById('modalTambah');
            const buttonTambahData = document.getElementById('tambahData');
            buttonTambahData.addEventListener('click', function() {
                modalTambah.classList.remove('hidden');
            });
            // Tombol close modal tambahData
            const closeButtonTambah = modalTambah.querySelector('[data-modal-hide="modal"]');
            closeButtonTambah.addEventListener('click', function() {
                modalTambah.classList.add('hidden');
            });
        });
    </script>

@endSection
