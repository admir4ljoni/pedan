@extends('template.adminSideBar')
@section('title', 'Admin - Prestasi')

@section('content')
<div class="">
    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-4">prestasi</h2>
        <x-buttonAdmin id="tambahData" title="Tambah Prestasi Baru" />

        {{-- modal hapus data --}}
        <x-alertHapus aksi="{{ route('admin-prestasi-delete') }}" />

        {{-- modal tambah data --}}
        <x-modal title="TAMBAH DATA" method="POST" id="modalTambah" aksi="{{ route('admin-prestasi-create') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                    <x-input id="nama" name="nama" type="text" title="Nama Prestasi" />
                    <x-input id="tanggal" name="tanggal" type="date" title="Tanggal Pelaksanaan" />
                </div>
            </x-slot>
        </x-modal>

        {{-- modal ubah data --}}
        <x-modal title="UBAH DATA" method="POST" id="modalEdit" aksi="{{ route('admin-prestasi-update') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <input type="hidden" name="idEdit" id="prestasiId" value="">
                    <x-input id="fotoEdit" name="foto" type="file" title="Upload Foto" />
                    <x-input id="namaEdit" name="nama" type="text" title="Nama Prestasi" />
                    <x-input id="tanggalEdit" name="tanggal" type="date" title="Tanggal Pelaksanaan" />
                </div>
            </x-slot>
        </x-modal>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        @foreach ($data as $prestasi)
            <x-cardAdmin1 image="{{Storage::url('public/storages/prestasi/' . $prestasi->gambar)}}"
                title="{{$prestasi->nama}}" date="{{$prestasi->tanggal_pelaksanaan}}">
                <x-slot name="icon1">
                    <x-iconEdit wks="{{$prestasi->id}}" />
                </x-slot>
                <x-slot name="icon2">
                    <x-iconHapus wks="{{$prestasi->id}}" />
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
        const prestasiId = document.getElementById('prestasiId');
        iconEdit.forEach(icon => {
            icon.addEventListener('click', function () {
                const id = icon.getAttribute('data-wks');
                console.log(id);
                prestasiId.setAttribute('value', id);

                fetch(`/admin/prestasi/${id}`).then(response => response.json()).then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    document.getElementById('namaEdit').value = data.nama;
                    document.getElementById('tanggalEdit').value = data.tanggal_pelaksanaan;
                }).catch(error => {
                    console.log(error);
                });
                modalEdit.classList.remove('hidden');
            });
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