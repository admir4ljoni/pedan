@extends('template.adminSideBar')
@section('title', 'Admin - Daftar Guru')

@section('content')
<div class="">
    <h2 class="text-2xl font-extrabold uppercase mb-4">Daftar Guru</h2>
    <x-buttonAdmin id="tambahData" title="Tambah Anggota Baru" />

    {{-- modal tambah data --}}
    <x-modal title="TAMBAH DATA" id="modalTambah" aksi="{{route ('admin-daftar-guru-create')}}" method="POST">
        <x-slot name="token">
            @csrf
        </x-slot>
        <x-slot name="content">
            <div class="mb-10">
                <x-input id="foto" name="foto" type="file" title="Foto Profil" />
                <x-input id="nama" name="nama" type="text" title="Nama Lengkap" />
                <x-input id="nomor" name="nomor" type="text" title="Nomor HP (format: XXXX-XXXX-XXXX)" />
                <div class="mt-5">
                    <label for="category" class="block text-base font-semibold leading-6 text-gray-900 mb-2">Guru
                        Mapel</label>

                    <select name="mapel_id" id="category" class="text-sm p-3 rounded-lg block w-full bg-gray-100 border-gray-500 placeholder-gray-400 text-black">
                        @forelse($mapel as $itemA)
                        <option value="{{ $itemA->id }}">{{$itemA->nama_mapel}}</option>
                        @empty
                        <option value="#">Mapel kosong</option>
                        @endforelse
                    </select>
                </div>
            </div>
        </x-slot>
    </x-modal>

    {{-- modal ubah data --}}
    <x-modal title="UBAH DATA" id="modalEdit" aksi="{{ route ('admin-daftar-guru-update') }}" method="POST">
        <x-slot name="token">
            @csrf
        </x-slot>
        <x-slot name="tokenMethod">
            @method('PUT')
        </x-slot>
        <x-slot name="content">
            <input type="hidden" id="guru_id" name="guru_id" value="">
            <div class="mb-10">
                <x-input id="editFoto" name="editFoto" type="file" title="Foto Profil" />
                <x-input id="editNama" name="editNama" type="text" title="Nama Lengkap" />
                <x-input id="editNomor" name="editNomor" type="text" title="Nomor HP (format: XXXX-XXXX-XXXX)" />
                <div class="mt-5">
                    <label for="category" class="block text-base font-semibold leading-6 text-gray-900 mb-2">Guru
                        Mapel</label>
                    <select id="editCategory" name="editMapel_id" class="text-sm p-3 rounded-lg block w-full bg-gray-100 border-gray-500 placeholder-gray-400 text-black">
                        @forelse($mapel as $itemB)
                        <option value="{{ $itemB->id }}">{{ $itemB->nama_mapel }}</option>
                        @empty
                        <option value="#">Mapel kosong</option>
                        @endforelse
                    </select>
                </div>
            </div>
        </x-slot>
    </x-modal>

    {{-- modal hapus data --}}
    <x-alertHapus aksi="{{ route('admin-daftar-guru-delete') }}" />

    {{-- show data --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        @foreach($guru as $pendidik)
        <x-hasilUpload>
            <x-slot name="title">
                {{ $pendidik->nama }}
            </x-slot>
            <x-slot name="slot">
                <img class="w-full h-full object-cover" src="{{ Storage::url('images/' . $pendidik->gambar)}}" />
            </x-slot>
            <x-slot name="icon">
                <span class="text-gray-500 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#04913b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit" data-id="{{ $pendidik->id }}">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </span>
                <span class="text-gray-500 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d70000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash" data-id="{{ $pendidik->id }}">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7l16 0" />
                        <path d="M10 11l0 6" />
                        <path d="M14 11l0 6" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg>
                </span>
            </x-slot>
        </x-hasilUpload>
        @endforeach

    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // fungsi untuk modal delete
        const modal = document.getElementById('popup-modal');
        const iconTrash = document.querySelectorAll('.icon-tabler-trash');

        iconTrash.forEach(icon => {
            icon.addEventListener('click', function() {
                const guruId = this.dataset.id;

                document.getElementById('hapusData').value = guruId;
                modal.classList.remove('hidden');
            });
        });

        // tombol close modal hapus
        const closeButton = modal.querySelector('[data-modal-hide="popup-modal"]');
        closeButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });



        // Fungsi untuk modal edit
        const modalEdit = document.getElementById('modalEdit');
        const iconEdit = document.querySelectorAll('.icon-tabler-edit');
        iconEdit.forEach(icon => {
            icon.addEventListener('click', function() {
                const guruId = this.dataset.id;

                fetch(`/admin/daftar-guru/${guruId}`).then(response => response.json()).then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    document.getElementById('guru_id').value = data.id;
                    document.getElementById('editNama').value = data.nama;
                    document.getElementById('editNomor').value = data.nomor_hp;
                    document.getElementById('editCategory').value = data.mapel[0].id;

                    modalEdit.classList.remove('hidden');
                }).catch(error => {
                    console.error('Error: ', error);
                });
            });
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