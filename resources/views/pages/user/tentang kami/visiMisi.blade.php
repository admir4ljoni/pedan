@extends('template.user')
@section('title', 'Visi Misi')

@section('content')

<div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
    <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down"
        data-aos-duration="1000">visi misi smk negeri 1
        pedan</h1>

    {{-- visi --}}
    <div class="flex flex-col md:flex-row gap-8 justify-start mt-20">
        {{-- image & background --}}
        <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10" data-aos="fade-right" data-aos-duration="2000">
            <div
                class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden">
            </div>
            @if ($data3)
                <img src="{{Storage::url('public/storages/about/' . $data3->gambar)}}" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            @else
                <img src="/assets/batikk.jpg" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            @endif
        </div>

        {{-- visi text --}}
        <div class="md:ml-48" data-aos="fade-left" data-aos-duration="2000">
            <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">Visi</h2>
            <div class="flex flex-col gap-4">
                @forelse ($data as $visi)
                    <x-check title="{{$visi->isi}}" />
                @empty
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                @endforelse
            </div>
        </div>
    </div>

    {{-- misi --}}
    <div class="flex flex-col md:flex-row gap-8 justify-end mt-20">
        {{-- misi text --}}
        <div class="md:mr-72 order-2 md:order-1" data-aos="fade-right" data-aos-duration="2000">
            <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">misi</h2>
            <div class="flex flex-col gap-4">
                @forelse ($data2 as $misi)
                    <x-check title="{{$misi->isi}}" />
                @empty
                    <x-check title="Mewujudkan Sekolah yang Cerdas" />
                @endforelse
            </div>
        </div>
        {{-- image & background --}}
        <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10 order-1 md:order-2" data-aos="fade-left"
            data-aos-duration="2000">
            <div
                class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden">
            </div>
            @if ($data4)
                <img src="{{Storage::url('public/storages/about/' . $data4->gambar)}}" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            @else
                <img src="/assets/batikk.jpg" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            @endif
        </div>
    </div>
</div>

@endsection