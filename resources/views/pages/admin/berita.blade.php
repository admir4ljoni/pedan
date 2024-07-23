@extends('template.adminSideBar')
@section('title', 'Admin - Berita')

@section('content')
<div class="">
    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-4">Berita</h2>
        <x-buttonAdmin id="tambahData" title="Tambah Berita Baru" />

        {{-- modal hapus data --}}
        <x-alertHapus aksi="{{ route('admin-berita-delete') }}" />

        {{-- modal tambah data --}}
        <x-modal title="TAMBAH DATA" method="POST" id="modalTambah" aksi="{{ route('admin-berita-create') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                    <x-input id="tanggal" name="tanggal" type="date" title="Tanggal Ditulis" />
                    <x-input id="judul" name="judul" type="text" title="Judul Berita" />
                    <div class="mt-5">
                        <label for="isi" class="block text-base font-semibold leading-6 text-gray-900">Isi
                            Berita</label>
                        <textarea id="isi" rows="4" name="isi"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Isi Berita Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data --}}
        <x-modal title="UBAH DATA" method="POST" id="modalEdit" aksi="{{ route('admin-berita-update') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <input id="beritaId" type="hidden" name="beritaId" value="">
                    <x-input id="fotoEdit" name="foto" type="file" title="Upload Foto" />
                    <x-input id="tanggalEdit" name="tanggal" type="date" title="Tanggal Ditulis" />
                    <x-input id="judulEdit" name="judul" type="text" title="Judul Berita" />
                    <div class="mt-5">
                        <label for="isiEdit" class="block text-base font-semibold leading-6 text-gray-900">Isi
                            Berita</label>
                        <textarea id="isiEdit" rows="4" name="isi"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tuliskan Isi Berita Disini"></textarea>
                    </div>
                </div>
            </x-slot>
        </x-modal>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        @foreach ($data as $berita)
            <x-cardAdmin1 image="{{Storage::url('public/storages/berita/' . $berita->gambar)}}" title="{{$berita->judul}}"
                date="{{ $berita->tanggal_pembuatan }}">
                <x-slot name="icon1">
                    <x-iconEdit wks="{{$berita->id}}" />
                </x-slot>
                <x-slot name="icon2">
                    <x-iconHapus wks="{{$berita->id}}" />
                </x-slot>
            </x-cardAdmin1>
        @endforeach

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // fungsi untuk modal delete
        const modal = document.getElementById('popup-modal');
        const iconTrash = document.querySelectorAll('.icon-tabler-trash');
        iconTrash.forEach(icon => {
            icon.addEventListener('click', function () {
                const id = icon.getAttribute('data-wks');
                console.log(id);
                document.getElementById('hapusData').value = id;

                modal.classList.remove('hidden');
            });
        });
        // tombol close modal hapus
        const closeButton = modal.querySelector('[data-modal-hide="popup-modal"]');
        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Fungsi untuk modal edit
        const modalEdit = document.getElementById('modalEdit');
        const iconEdit = document.querySelectorAll('.icon-tabler-edit');
        const beritaId = document.getElementById('beritaId');
        iconEdit.forEach(icon => {
            icon.addEventListener('click', function () {
                const id = icon.getAttribute('data-wks');
                console.log(id);
                beritaId.setAttribute('value', id);

                fetch(`/admin/berita/${id}`).then(response => response.json()).then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    document.getElementById('tanggalEdit').value = data.tanggal_pembuatan;
                    document.getElementById('judulEdit').value = data.judul;
                    document.getElementById('isiEdit').value = data.isi;
                }).catch(error => {
                    console.log(error);
                });
                modalEdit.classList.remove('hidden');
            })
        });

        // Tombol close modal edit
        const closeButtonEdit = modalEdit.querySelector('[data-modal-hide="modal"]');
        closeButtonEdit.addEventListener('click', function () {
            modalEdit.classList.add('hidden');
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
@endsection