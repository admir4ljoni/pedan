@extends('template.user')
@section('title', 'Visi Misi')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">visi misi smk negeri 1 pedan</h1>

        <div class="flex flex-col md:flex-row gap-8 justify-start mt-20">
            <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10">
                <div class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden"></div>
                <img src="/assets/batikk.jpg" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            </div>

            <div class="md:ml-48">
                <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">Visi</h2>
                <div class="flex flex-col gap-4">
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8 justify-end mt-20">
            <div class="md:mr-72 order-2 md:order-1">
                <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">misi</h2>
                <div class="flex flex-col gap-4">
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                </div>
            </div>
            <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10 order-1 md:order-2">
                <div class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden"></div>
                <img src="/assets/batikk.jpg" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            </div>
        </div>
    </div>

@endsection
