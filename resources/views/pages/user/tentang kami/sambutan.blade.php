@extends('template.user')
@section('title', 'Sambutan Kepala Sekolah')

@section('content')
    <div class="mx-12 md:mx-16 mt-12 md:mt-20">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down" data-aos-duration="1000">sambutan kepala sekolah SMK negeri 1 PEDAN</h1>
        <div class="flex flex-wrap md:flex-row justify-center md:gap-10">
            <div class="md:w-1/2 order-2 md:order-1 mt-10" data-aos="fade-left" data-aos-duration="2000">
                <h1 class="text-xl font-semibold">Assalamu’alaikum Warahmatullahi Wabarakaatuh. Salam sejahtera untuk kita
                    semua. Selamat datang di Web SMK Negeri 1 PedanWeb SMK Negeri 1 Pedan merupakan media informasi dan
                    komunikasi baik intern sekolah maupun bagi stakeholder sekolah yang lain. Web sekolah ini diharapkan
                    dapat menjadi sumber informasi tentang program, fasilitas, ketenagaan, prestasi, berita, dan
                    sebagainya. Web sekolah juga dapat dimanfaatkan secara optimal sebagai media pembelajaran bagi
                    peserta didik. Wassalaamu’alaikum Wr. Wb.</h1>
                <h2 class="font-bold text-gray-600 text-xl mt-4">Drs. Eko Subadri, M.M.</h2>
            </div>

            <div class="md:w-72 order-1 md:order-2 relative w-56 h-56 md:h-80" data-aos="fade-right" data-aos-duration="2000">
                <img src="/assets/kapsek.png" alt="kepala sekolah smkn1 pedan" class="w-full h-full relative z-10 object-cover" />
                <svg viewBox="20 2 170 170" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-full h-full z-0">
                    <path fill="#E5BC20"
                        d="M33.2,-34.2C45.9,-20.4,61.3,-10.2,67.6,6.3C73.9,22.8,71.2,45.6,58.4,54.1C45.6,62.6,22.8,56.7,6.5,50.2C-9.9,43.8,-19.7,36.7,-33.5,28.2C-47.3,19.7,-65,9.9,-70.6,-5.6C-76.2,-21.1,-69.7,-42.2,-55.9,-56C-42.2,-69.8,-21.1,-76.3,-5.4,-70.9C10.2,-65.5,20.4,-48,33.2,-34.2Z"
                        transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </div>

@endsection
