@extends('template.adminSideBar')
@section('title', 'Admin - Kesiswaan')

@section('content')
<div class="">
    <div class="">
        <h2 class="text-2xl font-extrabold uppercase mb-4">kesiswaan</h2>
        {{-- modal ubah data --}}
        <x-modal title="UBAH DATA" id="modalEdit" method="POST" id_form="editForm"
            aksi="{{ route('admin-kesiswaan-update') }}">
            <x-slot name="token">
                @csrf
            </x-slot>
            <x-slot name="tokenMethod">
                @method('PUT')
            </x-slot>
            <x-slot name="content">
                <div class="mb-10">
                    <input type="hidden" name="wks_id" id="wksId" value="">
                    <x-input id="foto" name="foto1" type="file" title="Upload Foto 1" />
                    <x-input id="foto" name="foto2" type="file" title="Upload Foto 2" />
                    <x-input id="foto" name="foto3" type="file" title="Upload Foto 3" />
                    <x-input id="foto" name="foto4" type="file" title="Upload Foto 4" />
                    <x-input id="foto" name="foto5" type="file" title="Upload Foto 5" />
                </div>
            </x-slot>
        </x-modal>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false" title="Program 7K (Kebersihan antar kelas)">
            <x-slot name="icon1">
                <x-iconEdit wks="1" />
            </x-slot>
        </x-cardAdmin1>
        <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false" title="Keikutsertaan Pada Lomba">
            <x-slot name="icon1">
                <x-iconEdit wks="2" />
            </x-slot>
        </x-cardAdmin1>
        <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false" title="Pengambangan minat dan bakat siswa">
            <x-slot name="icon1">
                <x-iconEdit wks="3" />
            </x-slot>
        </x-cardAdmin1>
        <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false" title="Penanaman Nilai-nilai karakter bangsa">
            <x-slot name="icon1">
                <x-iconEdit wks="4" />
            </x-slot>
        </x-cardAdmin1>
        <x-cardAdmin1 image="/assets/batikk.jpg" :showDividerLine="false" title="Penerimaan Peserta Didik Baru">
            <x-slot name="icon1">
                <x-iconEdit wks="5" />
            </x-slot>
        </x-cardAdmin1>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fungsi untuk modal edit
        const modalEdit = document.getElementById('modalEdit');
        const iconEdit = document.querySelectorAll('.icon-tabler-edit');
        const wksIdInput = document.getElementById('wksId');

        iconEdit.forEach(icon => {
            icon.addEventListener('click', function () {
                const wksId = icon.getAttribute('data-wks');

                console.log('wksId:', wksId);

                wksIdInput.setAttribute('value', wksId);

                modalEdit.classList.remove('hidden');
            });
        });

        // Tombol close modal edit
        const closeButtonEdit = modalEdit.querySelector('[data-modal-hide="modal"]');
        closeButtonEdit.addEventListener('click', function () {
            modalEdit.classList.add('hidden');
        });
    });
</script>
@endsection