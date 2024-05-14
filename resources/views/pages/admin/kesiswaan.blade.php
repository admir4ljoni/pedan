@extends('template.adminSideBar')
@section('title', 'Admin - Kesiswaan')

@section('content')
    <div class="">
        <div class="">
            <h2 class="text-2xl font-extrabold uppercase mb-4">kesiswaan</h2>
            <x-buttonAdmin id="tambahData" title="Tambah Baru" />

            {{-- modal hapus data --}}
            <x-alertHapus />

            {{-- modal tambah data --}}
            <x-modal title="TAMBAH DATA" id="modalTambah">
                <x-slot name="content">
                    <div class="mb-10">
                        <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                        <div class="mt-5">
                            <label for="category"
                                class="block text-base font-semibold leading-6 text-gray-900 mb-2">Kategori</label>
                            <select id="category"
                                class="text-sm p-3 rounded-lg block w-full bg-gray-100 border-gray-500 placeholder-gray-400 text-black">
                                <option selected="">Pilih Satu</option>
                                <option value="agamaIslam">Program 7K (Kebersihan antar kelas)</option>
                                <option value="agamaKristen">Keikutsertaan Pada Lomba</option>
                                <option value="ppkn">Pengambangan minat dan bakat siswa</option>
                                <option value="ppkn">Penanaman Nilai-nilai karakter bangsa</option>
                                <option value="ppkn">Penerimaan Peserta Didik Baru</option>
                            </select>
                        </div>
                    </div>
                </x-slot>
            </x-modal>

            {{-- modal ubah data --}}
            <x-modal title="UBAH DATA" id="modalEdit">
                <x-slot name="content">
                    <div class="mb-10">
                        <x-input id="foto" name="foto" type="file" title="Upload Foto" />
                        <div class="mt-5">
                            <label for="category"
                                class="block text-base font-semibold leading-6 text-gray-900 mb-2">Kategori</label>
                            <select id="category"
                                class="text-sm p-3 rounded-lg block w-full bg-gray-100 border-gray-500 placeholder-gray-400 text-black">
                                <option selected="">Pilih Satu</option>
                                <option value="agamaIslam">Program 7K (Kebersihan antar kelas)</option>
                                <option value="agamaKristen">Keikutsertaan Pada Lomba</option>
                                <option value="ppkn">Pengambangan minat dan bakat siswa</option>
                                <option value="ppkn">Penanaman Nilai-nilai karakter bangsa</option>
                                <option value="ppkn">Penerimaan Peserta Didik Baru</option>
                            </select>
                        </div>
                    </div>
                </x-slot>
            </x-modal>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false">
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
