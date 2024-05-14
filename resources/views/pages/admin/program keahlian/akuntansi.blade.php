@extends('template.adminSideBar')
@section('title', 'Admin - Akuntansi & Keuangan')

@section('content')
    <div class="">
        <div class="">
            <h2 class="text-2xl font-extrabold uppercase mb-14">akuntansi & keuangan lembaga</h2>
            {{-- modal ubah data profil jurusan --}}
            <x-modal title="UBAH DATA PROFIL JURUSAN" id="modalEditProfil">
                <x-slot name="content">
                    <div class="mb-10">
                        <div class="mt-5">
                            <label for="message" class="block text-base font-semibold leading-6 text-gray-900">Profil
                                Jurusan</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tuliskan Profil Jurusan Disini"></textarea>
                        </div>
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal ubah data visi misi jurusan --}}
            <x-modal title="UBAH DATA VISI MISI JURUSAN" id="modalEditVisi">
                <x-slot name="content">
                    <div class="mb-10">
                        <div class="mt-5">
                            <label for="messageVisi" class="block text-base font-semibold leading-6 text-gray-900">Visi Misi
                                Jurusan</label>
                            <textarea id="messageVisi" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tuliskan Visi Misi Jurusan Disini"></textarea>
                        </div>
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal ubah data materi jurusan --}}
            <x-modal title="UBAH DATA MATERI JURUSAN" id="modalEditMateri">
                <x-slot name="content">
                    <div class="mb-10">
                        <div class="mt-5">
                            <label for="messageMateri" class="block text-base font-semibold leading-6 text-gray-900">materi
                                jurusan</label>
                            <textarea id="messageMateri" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tuliskan materi Jurusan Disini"></textarea>
                        </div>
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal ubah data prospek kerja jurusan --}}
            <x-modal title="UBAH DATA PROSPEK KERJA JURUSAN" id="modalEditProspek">
                <x-slot name="content">
                    <div class="mb-10">
                        <div class="mt-5">
                            <label for="messageProspek"
                                class="block text-base font-semibold leading-6 text-gray-900">prospek kerja</label>
                            <textarea id="messageProspek" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tuliskan Prospek Kerja Jurusan Disini"></textarea>
                        </div>
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal tambah foto --}}
            <x-modal title="TAMBAH FOTO" id="modalTambahFoto">
                <x-slot name="content">
                    <div class="mb-10">
                        <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal hapus foto --}}
            <x-alertHapus />

        </div>
        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">profil jurusan</h3>
            <x-cardAdmin2
                desc="lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea illum aperiam
            dolore molestiae id nulla ex architecto deleniti rem officiis enim natus modi quidem cupiditate itaque quasi, iusto">
                <x-slot name="icon">
                    <x-iconEdit />
                </x-slot>
            </x-cardAdmin2>
        </div>

        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">visi & misi jurusan</h3>
            <x-cardAdmin2 :showList="true" :list="['Item 1', 'Item 2', 'Item 3']">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-visi" />
                </x-slot>
            </x-cardAdmin2>
        </div>

        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">materi jurusan</h3>
            <x-cardAdmin2 :showList="true" :list="['Item 1', 'Item 2', 'Item 3']">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-materi" />
                </x-slot>
            </x-cardAdmin2>
        </div>

        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">prospek kerja jurusan</h3>
            <x-cardAdmin2 :showList="true" :list="['Item 1', 'Item 2', 'Item 3']">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-prospek" />
                </x-slot>
            </x-cardAdmin2>
        </div>

        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">foto jurusan</h3>
            <x-buttonAdmin id="tambahFoto" title="Tambah Foto" />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false">
                    <x-slot name="icon2">
                        <x-iconHapus />
                    </x-slot>
                </x-cardAdmin1>
            </div>
        </div>
    </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk modal edit profil jurusan
            const modalEditProfil = document.getElementById('modalEditProfil');
            const iconEdit = document.querySelector('.icon-tabler-edit');
            iconEdit.addEventListener('click', function() {
                modalEditProfil.classList.remove('hidden');
            });
            // Tombol close modal edit profil jurusan
            const closeButtonEditSambutan = modalEditProfil.querySelector('[data-modal-hide="modal"]');
            closeButtonEditSambutan.addEventListener('click', function() {
                modalEditProfil.classList.add('hidden');
            });

            // Fungsi untuk modal edit visi misi jurusan
            const modalEditVisi = document.getElementById('modalEditVisi');
            const iconEditVisi = document.querySelector('.icon-tabler-edit-visi');
            iconEditVisi.addEventListener('click', function() {
                modalEditVisi.classList.remove('hidden');
            });
            // Tombol close modal edit visi misi jurusan
            const closeButtonEditVisi = modalEditVisi.querySelector('[data-modal-hide="modal"]');
            closeButtonEditVisi.addEventListener('click', function() {
                modalEditVisi.classList.add('hidden');
            });

            // Fungsi untuk modal edit materi jurusan
            const modalEditMateri = document.getElementById('modalEditMateri');
            const iconEditMateri = document.querySelector('.icon-tabler-edit-materi');
            iconEditMateri.addEventListener('click', function() {
                modalEditMateri.classList.remove('hidden');
            });
            // Tombol close modal edit materi jurusan
            const closeButtonEditMateri = modalEditMateri.querySelector('[data-modal-hide="modal"]');
            closeButtonEditMateri.addEventListener('click', function() {
                modalEditMateri.classList.add('hidden');
            });

            // Fungsi untuk modal prospek kerja jurusan
            const modalEditProspek = document.getElementById('modalEditProspek');
            const iconEditProspek = document.querySelector('.icon-tabler-edit-prospek');
            iconEditProspek.addEventListener('click', function() {
                modalEditProspek.classList.remove('hidden');
            });
            // Tombol close modal prospek kerja jurusan
            const closeButtonProspek = modalEditProspek.querySelector('[data-modal-hide="modal"]');
            closeButtonProspek.addEventListener('click', function() {
                modalEditProspek.classList.add('hidden');
            });


            // Fungsi untuk modal tambah foto
            const modalTambahFoto = document.getElementById('modalTambahFoto');
            const buttonTambahFoto = document.getElementById('tambahFoto');
            buttonTambahFoto.addEventListener('click', function() {
                modalTambahFoto.classList.remove('hidden');
            });
            // Tombol close modal tambah foto
            const closeButtonTambahFoto = modalTambahFoto.querySelector('[data-modal-hide="modal"]');
            closeButtonTambahFoto.addEventListener('click', function() {
                modalTambahFoto.classList.add('hidden');
            });

            // fungsi untuk modal delete foto
            const modal = document.getElementById('popup-modal');
            const iconTrash = document.querySelector('.icon-tabler-trash');
            iconTrash.addEventListener('click', function() {
                modal.classList.remove('hidden');
            });
            // tombol close modal hapus foto
            const closeButton = modal.querySelector('[data-modal-hide="popup-modal"]');
            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

        });
    </script>
@endSection
