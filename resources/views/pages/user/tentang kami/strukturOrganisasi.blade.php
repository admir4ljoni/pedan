@extends('template.user')
@section('title', 'Struktur Organisasi')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">struktur organisasi</h1>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            <x-anggota name="Dr. Eko Subadri, M.M." position="Kepala Sekolah" image="/assets/kapsek.png" />
            <x-anggota name="Budi Setyadu, S.Pd." position="WKS"
                image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
            <x-anggota name="Tri Suhandono, S.Kom " position="Humas Sekolah"
                image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
        </div>
    </div>

@endsection
