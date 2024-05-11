@extends('template.user')
@section('title', 'Struktur Organisasi')

@section('content')

    <div class="mx-4 mt-12 md:mx-16 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">struktur organisasi</h1>
        <div class="flex justify-center mb-10">
            <x-anggota name="Dr. Eko Subadri, M.M." position="Kepala Sekolah" image="/assets/kapsek.png" />
        </div>

        {{-- Plt. Kasubag,humas,wks --}}
        <div class="flex justify-center mb-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                <x-anggota name="Budi Setyadu, S.Pd." position="Plt. Kasubag. TU "
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="WKS Kurikulum"
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                <x-anggota name="Budi Setyadu, S.Pd." position="WKS Kesiswaan"
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="Humas dan HKI "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="Humas dan HKI "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />

            </div>
        </div>

        {{-- program keahlian --}}
        <div class="flex justify-center mb-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
                <x-anggota name="Budi Setyadu, S.Pd." position="Ka.Prog. Akuntansi"
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Manajemen Perkantoran dan Layanan Bisnis"
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                <x-anggota name="Budi Setyadu, S.Pd." position="Ka.Prog Pemasaran"
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Pengembangan Perangkat Lunak dan Gim "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Pengembangan Perangkat Lunak dan Gim "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Pengembangan Perangkat Lunak dan Gim "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />

            </div>
        </div>


    </div>


@endsection
