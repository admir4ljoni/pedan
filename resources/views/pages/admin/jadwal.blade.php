@extends('template.adminSideBar')
@section('title', 'Admin - Jadwal KBM')

@section('content')
<div class="">

    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-4">jadwal</h2>
        <x-buttonAdmin id="tambahData" title="Tambah/Ganti Jadwal Baru" />

        {{-- modal hapus data --}}
        <x-alertHapus aksi="{{route('admin-jadwal-delete')}}" />

        {{-- modal tambah data --}}
        <x-modal title="TAMBAH DATA" id="modalTambah" method="POST" aksi="{{ route('admin-jadwal-create') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <x-input id="jadwal" name="jadwal" type="file" title="Upload Jadwal" />
                    <x-input id="nama" name="nama" type="text" title="Nama Jadwal (Wajib diisi)" />
            </x-slot>
        </x-modal>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        @forelse ($data as $pdf)
            <x-hasilUpload>
                <x-slot name="title">
                    {{$pdf->title}}
                </x-slot>
                <x-slot name="slot">
                    <span class="size-8 flex justify-center items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                            stroke="#17274B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <path d="M9 9l1 0" />
                            <path d="M9 13l6 0" />
                            <path d="M9 17l6 0" />
                        </svg>
                    </span>
                </x-slot>
                <x-slot name="icon">
                    <a href="{{route('admin-jadwal-download')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#04913b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 11l5 5l5 -5" />
                            <path d="M12 4l0 12" />
                        </svg>
                    </a>

                    <span class="text-gray-500 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#d70000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash-activate">
                            <path stroke=" none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </span>
                </x-slot>
            </x-hasilUpload>
        @empty
            <x-hasilUpload>
                <x-slot name="title">
                    DATA KOSONG
                </x-slot>
                <x-slot name="slot">
                    <span class="size-8 flex justify-center items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                            stroke="#17274B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <path d="M9 9l1 0" />
                            <path d="M9 13l6 0" />
                            <path d="M9 17l6 0" />
                        </svg>
                    </span>
                </x-slot>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#04913b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 11l5 5l5 -5" />
                        <path d="M12 4l0 12" />
                    </svg>
                    <span class="text-gray-500 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#d70000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                            <path stroke=" none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </span>
                </x-slot>
            </x-hasilUpload>
        @endforelse

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // fungsi untuk modal delete
        const modal = document.getElementById('popup-modal');
        const iconTrash = document.querySelector('.icon-tabler-trash-activate');
        iconTrash.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });
        // tombol close modal hapus
        const closeButton = modal.querySelector('[data-modal-hide="popup-modal"]');
        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Fungsi untuk modal tambahData
        const modalTambah = document.getElementById('modalTambah');
        const buttonTambahData = document.getElementById('tambahData');
        buttonTambahData.addEventListener('click', function () {
            modalTambah.classList.remove('hidden');
        });
        // Tombol close modal tambahData
        const closeButtonTambah = modalTambah.querySelector('[data-modal-hide="modal"]');
        closeButtonTambah.addEventListener('click', function () {
            modalTambah.classList.add('hidden');
        });
    });
</script>

@endSection