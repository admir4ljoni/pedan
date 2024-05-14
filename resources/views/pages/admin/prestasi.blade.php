@extends('template.adminSideBar')
@section('title', 'Admin - Prestasi')

@section('content')
    <div class="">
        <div class="">
            <h2 class="text-2xl font-extrabold uppercase mb-4">prestasi</h2>
            <x-buttonAdmin id="tambahData" title="Tambah Prestasi Baru" />

            {{-- modal hapus data --}}
            <x-alertHapus />

            {{-- modal tambah data --}}
            <x-modal title="TAMBAH DATA" id="modalTambah">
                <x-slot name="content">
                    <div class="mb-10">
                        <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                        <x-input id="nama" name="nama" type="text" title="Nama Prestasi" />
                        <x-input id="tanggal" name="tanggal" type="date" title="Tanggal Pelaksanaan" />
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal ubah data --}}
            <x-modal title="UBAH DATA" id="modalEdit">
                <x-slot name="content">
                    <div class="mb-10">
                        <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                        <x-input id="nama" name="nama" type="text" title="Nama Prestasi" />
                        <x-input id="tanggal" name="tanggal" type="date" title="Tanggal Pelaksanaan" />
                    </div>
                </x-slot>
            </x-modal>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            <x-cardAdmin1 image="/assets/batikk.jpg" title="Prestasi 1" date="1 juni 2023">
                <x-slot name="icon1">
                    <x-iconEdit />
                </x-slot>
                <x-slot name="icon2">
                    <x-iconHapus />
                </x-slot>
            </x-cardAdmin1>
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
@endsection
