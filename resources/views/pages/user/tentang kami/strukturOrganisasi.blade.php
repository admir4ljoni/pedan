@extends('template.user')
@section('title', 'Struktur Organisasi')

@section('content')

<div class="mx-4 mt-12 md:mx-16 md:mt-20 ">
    <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down"
        data-aos-duration="1000">struktur organisasi</h1>
    <div class="" data-aos="fade-down" data-aos-duration="2000">
        <div class="flex justify-center mb-10">
            @if($kepsek)
                <x-anggota name="{{$kepsek->nama}}" position="{{$kepsek->jabatan->nama_jabatan}}"
                    image="{{Storage::url('public/images/' . $kepsek->gambar)}}" />
            @else
                <x-anggota name="Dr. Eko Subadri, M.M." position="Kepala Sekolah" image="/assets/kapsek.png" />
            @endif
        </div>
        {{-- Plt. Kasubag,humas,wks --}}
        <div class="flex justify-center mb-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                @if($kasubag)
                    <x-anggota name="{{$kasubag->nama}}" position="{{$kasubag->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kasubag->gambar)}}" />
                @else
                    <x-anggota name="Budi Setyadu, S.Pd." position="Plt. Kasubag. TU "
                        image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                @endif
                @if($wksKurikulum)
                    <x-anggota name="{{$wksKurikulum->nama}}" position="{{$wksKurikulum->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $wksKurikulum->gambar)}}" />
                @else
                    <x-anggota name="Tri Suhandono, S.Kom " position="WKS Kurikulum"
                        image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                @endif
                @if($wksKesiswaan)
                    <x-anggota name="{{$wksKesiswaan->nama}}" position="{{$wksKesiswaan->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $wksKesiswaan->gambar)}}" />
                @else
                    <x-anggota name="Budi Setyadu, S.Pd." position="WKS Kesiswaan"
                        image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                @endif
                @if($wksSarpas)
                    <x-anggota name="{{$wksSarpas->nama}}" position="{{$wksSarpas->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $wksSarpas->gambar)}}" />
                @else
                    <x-anggota name="Budi Setyadu, S.Pd." position="WKS SARPRAS"
                        image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                @endif
                @if($humas)
                    <x-anggota name="{{$humas->nama}}" position="{{$humas->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $humas->gambar)}}" />
                @else
                    <x-anggota name="Tri Suhandono, S.Kom " position="Humas dan HKI "
                        image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                @endif
            </div>
        </div>
        {{-- program keahlian --}}
        <div class="flex justify-center mb-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
                @if($kaprogAkutansi)
                    <x-anggota name="{{$kaprogAkutansi->nama}}" position="{{$kaprogAkutansi->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kaprogAkutansi->gambar)}}" />
                @else
                    <x-anggota name="Budi Setyadu, S.Pd." position="Ka.Prog. Akuntansi"
                        image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                @endif
                @if($kaprogBisnis)
                    <x-anggota name="{{$kaprogBisnis->nama}}" position="{{$kaprogBisnis->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kaprogBisnis->gambar)}}" />
                @else
                    <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Manajemen Perkantoran dan Layanan Bisnis"
                        image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                @endif
                @if($kaprogPemasaran)
                    <x-anggota name="{{$kaprogPemasaran->nama}}" position="{{$kaprogPemasaran->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kaprogPemasaran->gambar)}}" />
                @else
                    <x-anggota name="Budi Setyadu, S.Pd." position="Ka.Prog Pemasaran"
                        image="https://st3.depositphotos.com/16122460/18966/i/450/depositphotos_189668580-stock-photo-young-male-teacher-with-book.jpg" />
                @endif
                @if($kaprogPplg)
                    <x-anggota name="{{$kaprogPplg->nama}}" position="{{$kaprogPplg->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kaprogPplg->gambar)}}" />
                @else
                    <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Pengembangan Perangkat Lunak dan Gim "
                        image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                @endif
                @if($kaprogTkj)
                    <x-anggota name="{{$kaprogTkj->nama}}" position="{{$kaprogTkj->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kaprogTkj->gambar)}}" />
                @else
                    <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Teknologi Komputer dan Jaringan "
                        image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                @endif
                @if($kaprogBroadcasting)
                    <x-anggota name="{{$kaprogBroadcasting->nama}}"
                        position="{{$kaprogBroadcasting->jabatan->nama_jabatan}}"
                        image="{{Storage::url('public/images/' . $kaprogBroadcasting->gambar)}}" />
                @else
                    <x-anggota name="Tri Suhandono, S.Kom " position="Ka.Prog Broadcasting dan Perfilman "
                        image="https://st2.depositphotos.com/46171552/46805/i/450/depositphotos_468054886-stock-photo-teacher-books-smiling-camera-classroom.jpg" />
                @endif
            </div>
        </div>
    </div>
</div>

@endsection