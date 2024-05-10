@extends('template.user')
@section('title', 'Pendidik Sekolah')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Pendidik SMK Negeri 1 PEDAN</h1>
        <div class="mb-14 md:mb-20">
            <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru pendidikan agama islam</h2>
            <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            </div>
        </div>
        <div class="mb-14 md:mb-20">
            <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru pendidikan agama kristen
            </h2>
            <div class="flex flex-wrap gap-3 justify-center md:justify-normal">

            </div>
        </div>
        <div class="mb-14 md:mb-20">
            <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru ppkn
            </h2>
            <div class="flex flex-wrap gap-3 justify-center md:justify-normal">

            </div>
        </div>
    </div>

@endsection
