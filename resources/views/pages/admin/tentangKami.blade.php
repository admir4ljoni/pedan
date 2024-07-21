@extends('template.adminSideBar')
@section('title', 'Admin - Tentang Kami')

@section('content')
<div class="">
    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-14">Tentang smkn 1 pedan</h2>
        {{-- modal ubah data sambutan kepala sekolah --}}
        <x-modal title="UBAH DATA SAMBUTAN KEPALA SEKOLAH" method="POST" id="modalEditSambutan"
            aksi="{{ route('admin-about-us-update') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <div class="mt-5">
                        <input type="hidden" name="jenis" value="1">
                        <label for="message" class="block text-base font-semibold leading-6 text-gray-900">Isi
                            Sambutan</label>
                        <textarea id="message" name="isi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Sambutan Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data visi sekolah --}}
        <x-modal title="UBAH DATA VISI SEKOLAH" method="POST" id="modalEditVisi"
            aksi="{{ route('admin-about-us-update') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <input type="hidden" name="jenis" value="2">
                    <x-input id="fotoVisi1" name="foto1" type="file" title="Upload Foto 1" />
                    <x-input id="fotoVisi2" name="foto2" type="file" title="Upload Foto 2" />
                    <div class="mt-5">
                        <label for="messageMisi"
                            class="block text-base font-semibold leading-6 text-gray-900">Misi</label>
                        <textarea id="messageMisi" name="isi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Misi Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data misi sekolah --}}
        <x-modal title="UBAH DATA MISI SEKOLAH" method="POST" id="modalEditMisi"
            aksi="{{ route('admin-about-us-update') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <input type="hidden" name="jenis" value="3">
                    <x-input id="fotoMisi1" name="foto1" type="file" title="Upload Foto 1" />
                    <x-input id="fotoMisi2" name="foto2" type="file" title="Upload Foto 2" />
                    <div class="mt-5">
                        <label for="messageMisi"
                            class="block text-base font-semibold leading-6 text-gray-900">Misi</label>
                        <textarea id="messageMisi" name="isi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Misi Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">sambutan kepala sekolah</h3>
            <div class=" relative border-2 border-gray-200 w-full h-auto rounded-lg p-5">
                <div class="flex justify-between">
                    <div class="flex flex-col md:flex-row gap-5 justify-center items-center">
                        <img src="/assets/kapsek.png" alt="foto kapsek"
                            class="rounded-lg w-20 h-20 object-cover border-2 border-gray-200" />
                        <p class="text-lg font-bold">Drs H. Firdaus, M.Pd</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                        stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit bg-secondaryColor rounded-md p-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </div>

                <p class="mt-5 text-md font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                    ea illum aperiam
                    dolore molestiae id
                    nulla ex architecto deleniti rem officiis enim natus modi quidem cupiditate itaque quasi, iusto
                    eaque, aspernatur sint nobis reprehenderit officia voluptate laboriosam? Et recusandae illum alias
                    eligendi. Doloribus autem, laborum omnis corporis qui temporibus enim, doloremque incidunt illum
                    laboriosam rerum dicta cumque quam earum ad nulla asperiores accusantium officia deleniti? Nostrum
                    modi consequatur qui recusandae minus dolorum, perferendis placeat totam! Modi aspernatur similique
                    minima commodi consectetur facere iure, architecto earum rem velit ea magnam sed eos tenetur ratione
                    placeat labore et voluptatum quos dolores nulla?
                </p>
            </div>
        </div>

        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">visi sekolah</h3>
            <div class=" relative border-2 border-gray-200 w-full h-auto rounded-lg p-5">
                <div class="flex justify-between">
                    <img src="/assets/batikk.jpg" alt="visi sekolah"
                        class="rounded-lg w-20 h-20 object-cover border-2 border-gray-200" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                        stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit-visi bg-secondaryColor rounded-md p-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </div>

                <p class="mt-5 text-md font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                    ea illum aperiam
                    dolore molestiae id
                    nulla ex architecto deleniti rem officiis enim natus modi quidem cupiditate itaque quasi, iusto
                    eaque, aspernatur sint nobis reprehenderit officia voluptate laboriosam? Et recusandae illum alias
                    eligendi. Doloribus autem, laborum omnis corporis qui temporibus enim, doloremque incidunt illum
                    laboriosam rerum dicta cumque quam earum ad nulla asperiores accusantium officia deleniti? Nostrum
                    modi consequatur qui recusandae minus dolorum, perferendis placeat totam! Modi aspernatur similique
                    minima commodi consectetur facere iure, architecto earum rem velit ea magnam sed eos tenetur ratione
                    placeat labore et voluptatum quos dolores nulla?
                </p>
            </div>
        </div>
        <div class="mb-14">
            <h3 class="text-xl font-extrabold uppercase mb-4">misi sekolah</h3>
            <div class=" relative border-2 border-gray-200 w-full h-auto rounded-lg p-5">
                <div class="flex justify-between">
                    <img src="/assets/lks.jpg" alt="misi sekolah"
                        class="rounded-lg w-20 h-20 object-cover border-2 border-gray-200" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                        stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit-misi bg-secondaryColor rounded-md p-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </div>

                <p class="mt-5 text-md font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                    ea illum aperiam
                    dolore molestiae id
                    nulla ex architecto deleniti rem officiis enim natus modi quidem cupiditate itaque quasi, iusto
                    eaque, aspernatur sint nobis reprehenderit officia voluptate laboriosam? Et recusandae illum alias
                    eligendi. Doloribus autem, laborum omnis corporis qui temporibus enim, doloremque incidunt illum
                    laboriosam rerum dicta cumque quam earum ad nulla asperiores accusantium officia deleniti? Nostrum
                    modi consequatur qui recusandae minus dolorum, perferendis placeat totam! Modi aspernatur similique
                    minima commodi consectetur facere iure, architecto earum rem velit ea magnam sed eos tenetur ratione
                    placeat labore et voluptatum quos dolores nulla?
                </p>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fungsi untuk modal edit sambutan kepala sekolah
        const modalEditSambutan = document.getElementById('modalEditSambutan');
        const iconEdit = document.querySelector('.icon-tabler-edit');
        iconEdit.addEventListener('click', function () {
            modalEditSambutan.classList.remove('hidden');
        });
        // Tombol close modal edit sambutan kepala sekolah
        const closeButtonEditSambutan = modalEditSambutan.querySelector('[data-modal-hide="modal"]');
        closeButtonEditSambutan.addEventListener('click', function () {
            modalEditSambutan.classList.add('hidden');
        });

        // Fungsi untuk modal edit visi sekolah
        const modalEditVisi = document.getElementById('modalEditVisi');
        const iconEditVisi = document.querySelector('.icon-tabler-edit-visi');
        iconEditVisi.addEventListener('click', function () {
            modalEditVisi.classList.remove('hidden');
        });
        // Tombol close modal edit visi sekolah
        const closeButtonEditVisi = modalEditVisi.querySelector('[data-modal-hide="modal"]');
        closeButtonEditVisi.addEventListener('click', function () {
            modalEditVisi.classList.add('hidden');
        });

        // Fungsi untuk modal edit misi sekolah
        const modalEditMisi = document.getElementById('modalEditMisi');
        const iconEditMisi = document.querySelector('.icon-tabler-edit-misi');
        iconEditMisi.addEventListener('click', function () {
            modalEditMisi.classList.remove('hidden');
        });
        // Tombol close modal edit misi sekolah
        const closeButtonEditMisi = modalEditMisi.querySelector('[data-modal-hide="modal"]');
        closeButtonEditMisi.addEventListener('click', function () {
            modalEditMisi.classList.add('hidden');
        });
    });
</script>
@endSection