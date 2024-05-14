@extends('template.adminSideBar')
@section('title', 'Admin - Struktur Organisasi')

@section('content')
    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-4">Struktur Organisasi</h2>
        <x-buttonAdmin id="tambahData" title="Tambah Anggota Baru" />

        {{-- modal hapus data --}}
        <x-alertHapus />

        {{-- modal tambah data --}}
        <x-modal title="TAMBAH DATA" id="modalTambah">
            <x-slot name="content">
                <div class="mb-10">
                    <x-input id="foto" name="foto" type="file" title="Foto Profil" />
                    <x-input id="nama" name="nama" type="text" title="Nama Lengkap" />
                    <x-input id="jabatan" name="jabatan" type="text" title="Jabatan" />
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data --}}
        <x-modal title="UBAH DATA" id="modalEdit">
            <x-slot name="content">
                <div class="mb-10">
                    <x-input id="foto" name="foto" type="file" title="Foto Profil" />
                    <x-input id="nama" name="nama" type="text" title="Nama Lengkap" />
                    <x-input id="jabatan" name="jabatan" type="text" title="Jabatan" />
                </div>
            </x-slot>
        </x-modal>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            <x-hasilUpload>
                <x-slot name="title">
                    Drs. Eko Subadri, M.M
                </x-slot>
                <x-slot name="slot">
                    <img class="w-full h-full object-cover" src="/assets/kapsek.png" />
                </x-slot>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#04913b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </x-slot>
            </x-hasilUpload>

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


            // Fungsi untuk modal edit
            const modalEdit = document.getElementById('modalEdit');
            const iconEdit = document.querySelector('.icon-tabler-edit');
            iconEdit.addEventListener('click', function() {
                modalEdit.classList.remove('hidden');
            });
            // Tombol close modal edit
            const closeButtonEdit = modalEdit.querySelector('[data-modal-hide="modal"]');
            closeButtonEdit.addEventListener('click', function() {
                modalEdit.classList.add('hidden');
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
