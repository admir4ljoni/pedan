@extends('template.user')
@section('title', 'Kesiswaan')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Kesiswaan</h1>
        <div class="mb-24 mt-20">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor"> Penanaman Nilai-nilai karakter
                bangsa
            </h2>
            <x-galeriFoto image1="/assets/lks.jpg" image2="/assets/seminarr.jpg" image3="/assets/images3.jpeg"
                image4="/assets/batikk.jpg" image5="/assets/seminarr.jpg" />
        </div>
        <div class="mb-24 mt-20">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">Program 7K (Kebersihan antar
                kelas)
            </h2>
            <x-galeriFoto image1="https://smkn1nglegok.sch.id/wp-content/uploads/2018/09/kelas2.jpg"
                image2="https://smkn1nekat.sch.id/fix/wp-content/uploads/2020/01/IMG_0145-1024x683.jpg"
                image3="https://smkpgriblora.files.wordpress.com/2011/07/dsc02954.jpg"
                image4="https://smkn1nekat.sch.id/fix/wp-content/uploads/2020/01/IMG_0126-1024x683.jpg"
                image5="https://disdik.bekasikota.go.id/asset/foto_berita/P_20150302_124856.jpg" />
        </div>
        <div class="mb-24 mt-20">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor"> Keikutsertaan Lomba bidang sains,
                olah raga, seni dan bahasa
            </h2>
            <x-galeriFoto
                image1="https://st2.depositphotos.com/1037987/5934/i/450/depositphotos_59344029-stock-photo-high-school-basketball-team.jpg"
                image2="https://media.istockphoto.com/id/827507488/photo/junior-football-player-at-practice.jpg?b=1&s=612x612&w=0&k=20&c=Ote2-GkAbNHyXlgGwIA1M2UEqmeB7dnHY92757aznLA="
                image3="https://asset-2.tstatic.net/pontianak/foto/bank/images/voli-olimpiade-3.jpg"
                image4="/assets/batikk.jpg"
                image5="https://barisandepan.com/wp-content/uploads/2021/07/berenang-4-scaled.jpg" />
        </div>
        <div class="mb-24 mt-20">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor"> PPDB 2025
            </h2>
            <x-galeriFoto
                image1="https://st2.depositphotos.com/1037987/5934/i/450/depositphotos_59344029-stock-photo-high-school-basketball-team.jpg"
                image2="https://media.istockphoto.com/id/827507488/photo/junior-football-player-at-practice.jpg?b=1&s=612x612&w=0&k=20&c=Ote2-GkAbNHyXlgGwIA1M2UEqmeB7dnHY92757aznLA="
                image3="https://asset-2.tstatic.net/pontianak/foto/bank/images/voli-olimpiade-3.jpg"
                image4="/assets/batikk.jpg"
                image5="https://barisandepan.com/wp-content/uploads/2021/07/berenang-4-scaled.jpg" />
        </div>
    </div>

@endsection
