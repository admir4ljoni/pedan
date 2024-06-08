@extends('template.user')
@section('title', 'Jurusan Detail')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down" data-aos-duration="1000"> @yield('namaJurusan')
        </h1>
        <div class="flex flex-col md:flex-row gap-8 justify-start mt-20 mb-20">
            <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10" data-aos="fade-right" data-aos-duration="2000">
                <div
                    class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden">
                </div>
                <img src="@yield('gambarJurusan')" alt="foto jurusan"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            </div>
            <h3 class="text-xl font-bold mt-1" data-aos="fade-left" data-aos-duration="2000">@yield('deskripsiJurusan')</h3>
        </div>

        <div class="mb-20" data-aos="fade-down" data-aos-duration="2000">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">visi & misi</h2>
            <div class="flex flex-col gap-4">
                @yield('visiJurusan')
            </div>
        </div>

        <div class="mb-20" data-aos="fade-down" data-aos-duration="2000">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">materi yang akan dipelajari</h2>
            <div class="flex flex-col gap-4">
                @yield('materiJurusan')
            </div>
        </div>

        <div class="mb-20" data-aos="fade-down" data-aos-duration="2000">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">prospek kerja</h2>
            <div class="flex flex-col gap-4">
                <ol class="list-disc list-inside text-xl font-bold">
                    @yield('prospekKerjaJurusan')
                </ol>
            </div>
        </div>

        <div class="" data-aos="fade-down" data-aos-duration="2000">
            <h2 class="capitalize font-black text-2xl md:text-3xl mb-5 text-primaryColor">galeri kegiatan jurusan</h2>
            @yield('galeriFotoJurusan')
        </div>

    </div>

@endsection
