@extends('template.user')
@section('title', 'Akuntansi & Keuangan Lembaga')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Akuntansi & Keuangan
            Lembaga
        </h1>
        <div class="flex flex-col md:flex-row gap-8 justify-start mt-20 mb-20">
            <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10">
                <div
                    class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden">
                </div>
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-d-render-illustrating-concepts-of-accounting-and-financial-management-in-business-image_3737899.jpg"
                    alt="visi misi" class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            </div>
            <h3 class="text-xl font-bold mt-1">AKL (akuntansi Keuangan Lembaga) merupakan salah satu Program keahlian yang
                dimiliki SMK Negeri 1 Pedan, termasuk dalam Bidang Bisnis dan manajemen yang telah ada sejak berdirinya SMK
                Negeri 1 Pedan.

                Program Keahlian AKL secara umum memberikan keterampilan kepada peserta didik untuk mengelola dan melakukan
                pencatatan keuangan secara manual maupun komputerisasi, dan membekali peserta didik dengan keterampilan
                akuntansi, mengelola transaksi keuangan, pajak dan membentuk peserta didik yang bersikap mandiri dan
                berkarakter sehingga lulusannya dapat bekerja sesuai dengan bidangnya, berwirausaha maupun ke perguruan
                tinggi.</h3>
        </div>

        <div class="mb-20">
            <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">Visi & Misi</h2>
            <div class="flex flex-col gap-4">
                <x-check
                    title="Terwujudnya lulusan kompetensi keahlian Akuntansi dan Keuangan Lembaga yang Berkarakter, Kompeten dan Berdaya saing." />
                <x-check title="lorem ipsum dolor sit amet." />
                <x-check title="lorem ipsum dolor sit amet." />
                <x-check title="lorem ipsum dolor sit amet." />
            </div>
        </div>

        <div class="mb-20">
            <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">materi yang akan dipelajari</h2>
            <div class="flex flex-col gap-4">
                <x-check title="keuantansi dan keuangan" />
                <x-check title="Pengelolaan keuangan" />
                <x-check title="lorem ipsum" />
                <x-check title="lorem ipsum" />
            </div>
        </div>

        <div class="mb-20">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">prospek kerja</h2>
            <div class="flex flex-col gap-4">
                <ol class="list-disc list-inside text-xl font-bold">
                    <li>lorem ipsum dolor sit amet</li>
                    <li>lorem ipsum dolor sit amet</li>
                    <li>lorem ipsum dolor sit amet</li>
                    <li>lorem ipsum dolor sit amet</li>
                    <li>lorem ipsum dolor sit amet</li>
                </ol>
            </div>
        </div>

        <div class="">
            <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">galeri kegiatan jurusan</h2>
            <x-galeriFoto title1="kunjungan ke bank bri"
                image1="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-d-render-illustrating-concepts-of-accounting-and-financial-management-in-business-image_3737899.jpg" />
        </div>
    </div>

@endsection
