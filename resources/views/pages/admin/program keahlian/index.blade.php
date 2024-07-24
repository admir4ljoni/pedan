@extends('template.adminSideBar')
@section('title', 'Program Keahlian')

@section('content')
<h2 class="text-2xl font-extrabold uppercase">program keahlian</h2>
<div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-10">
    <div
        class="flex justify-center items-center border border-gray-300 w-72 h-52 rounded-lg shadow-md hover:bg-gray-100">
        <a href="{{route('admin-jurusan-akutansi')}}">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-businessplan bg-yellow-300 rounded-full p-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0" />
                    <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                    <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                    <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4" />
                    <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M5 15v1m0 -8v1" />
                </svg>
                <h3 class="text-center font-bold mt-3 px-2">Akuntansi & Keuangan Lembaga</h3>
            </div>
        </a>
    </div>
    <div
        class="flex justify-center items-center border border-gray-300 w-72 h-52 rounded-lg shadow-md hover:bg-gray-100">
        <a href="{{route('admin-jurusan-menajemen-perkantoran')}}">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-bank bg-blue-300 rounded-full p-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l18 0" />
                    <path d="M3 10l18 0" />
                    <path d="M5 6l7 -3l7 3" />
                    <path d="M4 10l0 11" />
                    <path d="M20 10l0 11" />
                    <path d="M8 14l0 3" />
                    <path d="M12 14l0 3" />
                    <path d="M16 14l0 3" />
                </svg>
                <h3 class="text-center font-bold mt-3 px-2">Manajemen Perkantoran & Layanan Bisnis</h3>
            </div>
        </a>
    </div>
    <div
        class="flex justify-center items-center border border-gray-300 w-72 h-52 rounded-lg shadow-md hover:bg-gray-100">
        <a href="{{route('admin-jurusan-perangkat-lunak')}}">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-code bg-green-300 rounded-full p-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 8l-4 4l4 4" />
                    <path d="M17 8l4 4l-4 4" />
                    <path d="M14 4l-4 16" />
                </svg>
                <h3 class="text-center font-bold mt-3 px-2">Pengembangan Perangkat Lunak & Gim</h3>
            </div>
        </a>
    </div>
    <div
        class="flex justify-center items-center border border-gray-300 w-72 h-52 rounded-lg shadow-md hover:bg-gray-100">
        <a href="{{route('admin-jurusan-teknik-komputer-jaringan')}}">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-computing bg-orange-300 rounded-full p-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M6.657 16c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878" />
                    <path d="M12 16v5" />
                    <path d="M16 16v4a1 1 0 0 0 1 1h4" />
                    <path d="M8 16v4a1 1 0 0 1 -1 1h-4" />
                </svg>
                <h3 class="text-center font-bold mt-3 px-2">Teknik Jaringan Komputer & Telekomunikasi</h3>
            </div>
        </a>
    </div>
    <div
        class="flex justify-center items-center border border-gray-300 w-72 h-52 rounded-lg shadow-md hover:bg-gray-100">
        <a href="{{route('admin-jurusan-broadcasting')}}">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-broadcast bg-red-300 rounded-full p-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18.364 19.364a9 9 0 1 0 -12.728 0" />
                    <path d="M15.536 16.536a5 5 0 1 0 -7.072 0" />
                    <path d="M12 13m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                </svg>
                <h3 class="text-center font-bold mt-3 px-2">Broadcasting & Perfilman</h3>
            </div>
        </a>
    </div>

    <div
        class="flex justify-center items-center border border-gray-300 w-72 h-52 rounded-lg shadow-md hover:bg-gray-100">
        <a href="{{route('admin-jurusan-pemasaran')}}">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-store bg-purple-300 rounded-full p-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l18 0" />
                    <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                    <path d="M5 21l0 -10.15" />
                    <path d="M19 21l0 -10.15" />
                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                </svg>
                <h3 class="text-center font-bold mt-3 px-2">Pemasaran</h3>
            </div>
        </a>
    </div>

</div>
@endSection