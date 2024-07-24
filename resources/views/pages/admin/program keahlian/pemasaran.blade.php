@extends('template.adminSideBar')
@section('title', 'Admin - Pemasaran ')

@section('content')
<div class="">
    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-14">Pemasaran</h2>
        {{-- modal ubah data profil jurusan --}}
        <x-modal title="UBAH DATA PROFIL JURUSAN" id="modalEditProfil"
            aksi="{{route('admin-jurusan-update', ['jurusan' => '6'])}}" method="POST">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <div class="mt-5">
                        <label for="message" class="block text-base font-semibold leading-6 text-gray-900">Profil
                            Jurusan</label>
                        <textarea id="message" name="profil" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Profil Jurusan Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data visi misi jurusan --}}
        <x-modal title="UBAH DATA VISI MISI JURUSAN" id="modalEditVisi"
            aksi="{{route('admin-jurusan-update', ['jurusan' => '6'])}}" method="POST">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <div class="mt-5">
                        <label for="messageVisi" class="block text-base font-semibold leading-6 text-gray-900">Visi Misi
                            Jurusan</label>
                        <textarea id="messageVisi" name="visiMisi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Visi Misi Jurusan Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data materi jurusan --}}
        <x-modal title="UBAH DATA MATERI JURUSAN" id="modalEditMateri"
            aksi="{{route('admin-jurusan-update', ['jurusan' => '6'])}}" method="POST">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <div class="mt-5">
                        <label for="messageMateri" class="block text-base font-semibold leading-6 text-gray-900">materi
                            jurusan</label>
                        <textarea id="messageMateri" name="materi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan materi Jurusan Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data prospek kerja jurusan --}}
        <x-modal title="UBAH DATA PROSPEK KERJA JURUSAN" id="modalEditProspek"
            aksi="{{route('admin-jurusan-update', ['jurusan' => '6'])}}" method="POST">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <div class="mt-5">
                        <label for="messageProspek"
                            class="block text-base font-semibold leading-6 text-gray-900">prospek kerja</label>
                        <textarea id="messageProspek" name="prospek" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Prospek Kerja Jurusan Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal tambah foto --}}
        <x-modal title="TAMBAH FOTO" id="modalTambahFoto" aksi="{{route('admin-jurusan-update', ['jurusan' => '6'])}}"
            method="POST">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                </div>
            </x-slot>
        </x-modal>

        {{-- modal hapus foto --}}
        <x-alertHapus aksi="{{ route('admin-jurusan-delete', ['jurusan' => '6']) }}" />

    </div>
    <div class="mb-14">
        <h3 class="text-xl font-extrabold uppercase mb-4">profil jurusan</h3>
        @if($profil)
            <x-cardAdmin2 desc="{{$profil->isi}}">
                <x-slot name="icon">
                    <x-iconEdit />
                </x-slot>
            </x-cardAdmin2>
        @else
            <x-cardAdmin2
                desc="lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea illum aperiamdolore molestiae id nulla ex architecto deleniti rem officiis enim natus modi quidem cupiditate itaque quasi, iusto">
                <x-slot name="icon">
                    <x-iconEdit />
                </x-slot>
            </x-cardAdmin2>
        @endif
    </div>
    <div class="mb-14">
        <h3 class="text-xl font-extrabold uppercase mb-4">visi & misi jurusan</h3>
        @if($visiMisi)
            <x-cardAdmin2 :showList="true" :list="$visiMisi">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-visi" />
                </x-slot>
            </x-cardAdmin2>
        @else
            <x-cardAdmin2 :showList="true" :list="['Item 1', 'Item 2', 'Item 3']">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-visi" />
                </x-slot>
            </x-cardAdmin2>
        @endif

    </div>

    <div class="mb-14">
        <h3 class="text-xl font-extrabold uppercase mb-4">materi jurusan</h3>
        @if($materi)
            <x-cardAdmin2 :showList="true" :list="$materi">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-materi" />
                </x-slot>
            </x-cardAdmin2>
        @else
            <x-cardAdmin2 :showList="true" :list="['Item 1', 'Item 2', 'Item 3']">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-materi" />
                </x-slot>
            </x-cardAdmin2>
        @endif
    </div>

    <div class="mb-14">
        <h3 class="text-xl font-extrabold uppercase mb-4">prospek kerja jurusan</h3>
        @if($prospek)
            <x-cardAdmin2 :showList="true" :list="$prospek">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-prospek" />
                </x-slot>
            </x-cardAdmin2>
        @else
            <x-cardAdmin2 :showList="true" :list="['Item 1', 'Item 2', 'Item 3']">
                <x-slot name="icon">
                    <x-iconEdit namaIcon="-prospek" />
                </x-slot>
            </x-cardAdmin2>
        @endif
    </div>

    <div class="mb-14">
        <h3 class="text-xl font-extrabold uppercase mb-4">foto jurusan (maksimal 5 gambar)</h3>
        <x-buttonAdmin id="tambahFoto" title="Tambah Foto" />
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            @forelse($data as $gambar)
                <x-cardAdmin1 image="{{Storage::url('public/storages/jurusan/' . $gambar->isi)}}" :showDividerLine="false">
                    <x-slot name="icon2">
                        <x-iconHapus wks="{{$gambar->id}}" />
                    </x-slot>
                </x-cardAdmin1>
            @empty
                <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false">
                </x-cardAdmin1>
            @endforelse
        </div>
    </div>
</div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fungsi untuk modal edit profil jurusan
        const modalEditProfil = document.getElementById('modalEditProfil');
        const iconEdit = document.querySelector('.icon-tabler-edit');
        iconEdit.addEventListener('click', function () {
            modalEditProfil.classList.remove('hidden');
        });
        // Tombol close modal edit profil jurusan
        const closeButtonEditSambutan = modalEditProfil.querySelector('[data-modal-hide="modal"]');
        closeButtonEditSambutan.addEventListener('click', function () {
            modalEditProfil.classList.add('hidden');
        });

        // Fungsi untuk modal edit visi misi jurusan
        const modalEditVisi = document.getElementById('modalEditVisi');
        const iconEditVisi = document.querySelector('.icon-tabler-edit-visi');
        iconEditVisi.addEventListener('click', function () {
            modalEditVisi.classList.remove('hidden');
        });
        // Tombol close modal edit visi misi jurusan
        const closeButtonEditVisi = modalEditVisi.querySelector('[data-modal-hide="modal"]');
        closeButtonEditVisi.addEventListener('click', function () {
            modalEditVisi.classList.add('hidden');
        });

        // Fungsi untuk modal edit materi jurusan
        const modalEditMateri = document.getElementById('modalEditMateri');
        const iconEditMateri = document.querySelector('.icon-tabler-edit-materi');
        iconEditMateri.addEventListener('click', function () {
            modalEditMateri.classList.remove('hidden');
        });
        // Tombol close modal edit materi jurusan
        const closeButtonEditMateri = modalEditMateri.querySelector('[data-modal-hide="modal"]');
        closeButtonEditMateri.addEventListener('click', function () {
            modalEditMateri.classList.add('hidden');
        });

        // Fungsi untuk modal prospek kerja jurusan
        const modalEditProspek = document.getElementById('modalEditProspek');
        const iconEditProspek = document.querySelector('.icon-tabler-edit-prospek');
        iconEditProspek.addEventListener('click', function () {
            modalEditProspek.classList.remove('hidden');
        });
        // Tombol close modal prospek kerja jurusan
        const closeButtonProspek = modalEditProspek.querySelector('[data-modal-hide="modal"]');
        closeButtonProspek.addEventListener('click', function () {
            modalEditProspek.classList.add('hidden');
        });


        // Fungsi untuk modal tambah foto
        const modalTambahFoto = document.getElementById('modalTambahFoto');
        const buttonTambahFoto = document.getElementById('tambahFoto');
        buttonTambahFoto.addEventListener('click', function () {
            modalTambahFoto.classList.remove('hidden');
        });
        // Tombol close modal tambah foto
        const closeButtonTambahFoto = modalTambahFoto.querySelector('[data-modal-hide="modal"]');
        closeButtonTambahFoto.addEventListener('click', function () {
            modalTambahFoto.classList.add('hidden');
        });

        // fungsi untuk modal delete foto
        const modal = document.getElementById('popup-modal');
        const iconTrash = document.querySelectorAll('.icon-tabler-trash');
        iconTrash.forEach(icon => {
            icon.addEventListener('click', function () {
                const id = icon.getAttribute('data-wks');
                console.log(id);
                document.getElementById('hapusData').value = id;

                modal.classList.remove('hidden');
            })
        });
        // tombol close modal hapus foto
        const closeButton = modal.querySelector('[data-modal-hide="popup-modal"]');
        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

    });
</script>
@endSection