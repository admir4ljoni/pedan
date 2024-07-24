@extends('template.user')
@section('title', 'Pendidik Sekolah')

@section('content')

<div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
    <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down"
        data-aos-duration="1000">Pendidik SMK Negeri 1 PEDAN</h1>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru pendidikan agama islam
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($pai as $guruPai)
                <x-anggota name="{{$guruPai->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruPai->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse

        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru pendidikan agama kristen
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($pak as $guruPak)
                <x-anggota name="{{$guruPak->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruPak->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru ppkn
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($pp as $guruPP)
                <x-anggota name="{{$guruPP->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruPP->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru bahasa indonesia
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($bindo as $guruBindo)
                <x-anggota name="{{$guruBindo->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruBindo->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru matematika
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($mat as $guruMat)
                <x-anggota name="{{$guruMat->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruMat->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru sejarah
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($sej as $guruSej)
                <x-anggota name="{{$guruSej->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruSej->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru bahasa inggris
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($binggris as $guruBinggris)
                <x-anggota name="{{$guruBinggris->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruBinggris->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru seni budaya
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($sb as $guruSb)
                <x-anggota name="{{$guruSb->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruSb->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru olahraga
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($or as $guruOr)
                <x-anggota name="{{$guruOr->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruOr->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru ipas
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($ipas as $guruIpas)
                <x-anggota name="{{$guruIpas->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruIpas->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru keahlian pengembangan
            perangkat
            lunak dan gim
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($rpl as $guruRpl)
                <x-anggota name="{{$guruRpl->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruRpl->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru keahlian teknik komputer
            dan
            jaringan
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($tkj as $guruTkj)
                <x-anggota name="{{$guruTkj->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruTkj->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru keahlian akutansi
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($akutansi as $guruAkutansi)
                <x-anggota name="{{$guruAkutansi->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruAkutansi->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru keahlian Manajemen
            Perkantoran dan
            Layanan Bisnis
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($mplb as $guruMplb)
                <x-anggota name="{{$guruMplb->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruMplb->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru keahlian pemasaran
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($pemasaran as $guruPemasaran)
                <x-anggota name="{{$guruPemasaran->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruPemasaran->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru bahasa jawa
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($bjawa as $guruBjawa)
                <x-anggota name="{{$guruBjawa->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruBjawa->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
    <div class="mb-14 md:mb-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-extrabold text-xl md:text-2xl text-primaryColor mb-8">guru bimbingan konseling
        </h2>
        <div class="flex flex-wrap gap-3 justify-center md:justify-normal">
            @forelse($bk as $guruBk)
                <x-anggota name="{{$guruBk->guru->nama}}"
                    image="{{Storage::url('public/images/' . $guruBk->guru->gambar) }}" />
            @empty
                <x-anggota name="Dr. Eko Subadri, M.M." image="/assets/kapsek.png" />
                <x-anggota name="Budi Setyadu, S.Pd."
                    image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                <x-anggota name="Tri Suhandono, S.Kom "
                    image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
            @endforelse
        </div>
    </div>
</div>

@endsection