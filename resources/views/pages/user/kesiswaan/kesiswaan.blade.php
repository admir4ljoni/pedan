@extends('template.user')
@section('title', 'Kesiswaan')

@section('content')
<div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
    <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down"
        data-aos-duration="1000">Kesiswaan</h1>
    <div class="mb-24 mt-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor"> Penanaman Nilai-nilai karakter
            bangsa
        </h2>
        @php
            $nilaiKarakterImages = $nilaiKarakter->map(fn($item) => [
                'image' => Storage::url('public/storages/wks/' . $item->gambar ?? '/assets/batikk.jpg')
            ])->toArray();
        @endphp
        <x-galeriFoto :image1="$nilaiKarakterImages[0]['image'] ?? 'assets/lks.jpg'"
            :image2="$nilaiKarakterImages[1]['image'] ?? 'assets/lks.jpg'"
            :image3="$nilaiKarakterImages[2]['image'] ?? 'assets/lks.jpg'"
            :image4="$nilaiKarakterImages[3]['image'] ?? 'assets/lks.jpg'"
            :image5="$nilaiKarakterImages[4]['image'] ?? 'assets/lks.jpg'" />

    </div>
    <div class="mb-24 mt-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">Program 7K (Kebersihan antar
            kelas)
        </h2>
        @php
            $kebersihanImages = $kebersihan->map(fn($item) => [
                'image' => Storage::url('public/storages/wks/' . $item->gambar ?? '/assets/batikk.jpg')
            ])->toArray();
        @endphp
        <x-galeriFoto :image1="$kebersihanImages[0]['image'] ?? 'assets/lks.jpg'"
            :image2="$kebersihanImages[1]['image'] ?? 'assets/lks.jpg'"
            :image3="$kebersihanImages[2]['image'] ?? 'assets/lks.jpg'"
            :image4="$kebersihanImages[3]['image'] ?? 'assets/lks.jpg'"
            :image5="$kebersihanImages[4]['image'] ?? 'assets/lks.jpg'" />
    </div>
    <div class="mb-24 mt-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor"> Keikutsertaan Lomba bidang sains,
            olah raga, seni dan bahasa
        </h2>
        @php
            $lombaImages = $lomba->map(fn($item) => [
                'image' => Storage::url('public/storages/wks/' . $item->gambar ?? '/assets/batikk.jpg')
            ])->toArray();
        @endphp
        <x-galeriFoto :image1="$lombaImages[0]['image'] ?? 'assets/lks.jpg'"
            :image2="$lombaImages[1]['image'] ?? 'assets/lks.jpg'"
            :image3="$lombaImages[2]['image'] ?? 'assets/lks.jpg'"
            :image4="$lombaImages[3]['image'] ?? 'assets/lks.jpg'"
            :image5="$lombaImages[4]['image'] ?? 'assets/lks.jpg'" />
    </div>
    <div class="mb-24 mt-20" data-aos="fade-right" data-aos-duration="2000">
        <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor"> PPDB 2025
        </h2>
        @php
            $ppdbImages = $ppdb->map(fn($item) => [
                'image' => Storage::url('public/storages/wks/' . $item->gambar ?? '/assets/batikk.jpg')
            ])->toArray();
        @endphp
        <x-galeriFoto :image1="$ppdbImages[0]['image'] ?? 'assets/lks.jpg'"
            :image2="$ppdbImages[1]['image'] ?? 'assets/lks.jpg'" :image3="$ppdbImages[2]['image'] ?? 'assets/lks.jpg'"
            :image4="$ppdbImages[3]['image'] ?? 'assets/lks.jpg'"
            :image5="$ppdbImages[4]['image'] ?? 'assets/lks.jpg'" />
    </div>
</div>

@endsection