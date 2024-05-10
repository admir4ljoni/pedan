@extends('template.user')
@section('title', 'Prestasi')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">prestasi siswa smk negeri 1
            pedan
        </h1>
        <div class="flex flex-wrap gap-5 justify-center">
            <x-prestasi image="/assets/lksss.jpeg" title="Juara 1 LKS IT Network Tingkat Kabupaten Klaten"
                date="1 juni 2023" />
            <x-prestasi image="/assets/batikk.jpg"
                title="Juara 3 Kategori Umum Lomba Video Edukasi Perilaku Hidup Bersih – Dinkes Kabupaten Klaten"
                date="31 Agustus 2023" />
            <x-prestasi image="/assets/lksss.jpeg" title="Juara 1 LKS Bisnis Daring Tingkat Kabupaten Klaten"
                date="1 juni 2023" />
            <x-prestasi image="/assets/seminarr.jpg" title="Juara 2 Cerdas cermat Akuntansi Pelajar Se Solo raya"
                date="31 Agustus 2023" />

        </div>
    </div>

@endsection
