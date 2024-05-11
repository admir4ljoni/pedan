@extends('template.adminSideBar')
@section('title', 'Prestasi')

@section('content')
    <div class="">
        <div class="">
            <h2 class="text-2xl font-extrabold uppercase mb-4">prestasi</h2>
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
                Tambah Prestasi Baru
            </button>

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

        <div class="flex flex-col md:flex-row gap-4">
            <div class="relative">
                <img src="/assets/batikk.jpg" alt="prestasi smk negeri 1 pedan"
                    class="rounded-lg w-full md:w-72 h-72 object-cover brightness-50" />
                <p class="absolute left-0 right-0 bottom-14 flex justify-start text-white font-bold text-lg capitalize mx-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis quo quam vitae aliquam sit! Mollitia animi repudiandae ducimus error vitae?
                </p>
                <div class="absolute w-1/3 h-1 rounded-lg bg-secondaryColor bottom-12 md:bottom-10 left-0 right-0 mx-3"></div>
                <p class="absolute bottom-4 left-0 right-0 text-white text-md font-bold mt-2 mx-3 md:mt-0 md:bottom-2">1 juni 2023</p>

                <span class="absolute top-3 right-3 flex flex-row gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                        stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit bg-secondaryColor rounded-md p-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                        stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash bg-red-700 rounded-md p-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7l16 0" />
                        <path d="M10 11l0 6" />
                        <path d="M14 11l0 6" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg>
                    </svg>
                </span>
            </div>

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
