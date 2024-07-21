<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="fixed top-0 py-2 z-50 w-full bg-primaryColor border-b border-gray-200">
        <div class="px-3 py-2 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm rounded-lg sm:hidden focus:outline-none focus:ring-2 text-gray-400">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <div class="flex ms-2 md:me-24">
                        <img src="{{ asset('assets/logo smk pedan.png') }}" class=" h-14 me-3" alt=" Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">SMKN 1
                            Pedan
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3 relative">
                        <button type="button" id="dropdown-toggle"
                            class="flex text-sm bg-primaryColor rounded-full focus:ring-2 focus:ring-secondaryColor"
                            aria-expanded="false">
                            <span class="sr-only">Open user menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24"
                                fill="none" stroke="#ffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                            </svg>
                        </button>
                        <div class="z-50 hidden my-4 w-36 text-base list-none divide-y rounded shadow bg-secondaryColor absolute top-full left-1/2 transform -translate-x-32"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-base text-gray-800" role="none">
                                    Admin
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-base text-black font-semibold hover:bg-white"
                                        role="menuitem">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm:translate-x-0 bg-primaryColor border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-primaryColor">
            <ul class="space-y-2 mt-10 font-medium">
                <li>
                    <a href="/admin/program-keahlian" class="flex items-center p-2 rounded-lg
                    {{ request()->is('admin/program-keahlian') ? 'bg-secondaryColor text-black' : 'text-white' }}
                    hover:text-black hover:bg-secondaryColor group"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-books">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                            <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                            <path d="M5 8h4" />
                            <path d="M9 16h4" />
                            <path
                                d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                            <path d="M14 9l4 -1" />
                            <path d="M16 16l3.923 -.98" />
                        </svg>
                        <span class="ms-3 font-semibold">Program Keahlian</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/jadwal" class="flex items-center p-2 rounded-lg
                        {{ request()->is('admin/jadwal') ? 'bg-secondaryColor text-black' : 'text-white' }}
                        hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-month">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M7 14h.013" />
                            <path d="M10.01 14h.005" />
                            <path d="M13.01 14h.005" />
                            <path d="M16.015 14h.005" />
                            <path d="M13.015 17h.005" />
                            <path d="M7.01 17h.005" />
                            <path d="M10.01 17h.005" />
                        </svg>
                        <span class="ms-3 font-semibold">Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/berita" class="flex items-center p-2 rounded-lg
                        {{ request()->is('admin/berita') ? 'bg-secondaryColor text-black' : 'text-white' }}
                        hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-article">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                            <path d="M7 8h10" />
                            <path d="M7 12h10" />
                            <path d="M7 16h10" />
                        </svg>
                        <span class="ms-3 font-semibold">Berita</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/prestasi" class="flex items-center p-2 rounded-lg
                    {{ request()->is('admin/prestasi') ? 'bg-secondaryColor text-black' : 'text-white' }}
                    hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-trophy">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 21l8 0" />
                            <path d="M12 17l0 4" />
                            <path d="M7 4l10 0" />
                            <path d="M17 4v8a5 5 0 0 1 -10 0v-8" />
                            <path d="M5 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M19 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        </svg>
                        <span class="ms-3 font-semibold">Prestasi</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/tentang-kami" class="flex items-center p-2 rounded-lg {{ request()->is('admin/tentang-kami') ? 'bg-secondaryColor text-black' : 'text-white' }}
                    hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                        </svg>
                        <span class="ms-3 font-semibold">Tentang Kami</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/kesiswaan" class="flex items-center p-2 rounded-lg {{ request()->is('admin/kesiswaan') ? 'bg-secondaryColor text-black' : 'text-white' }}
                    hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-friends">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />
                            <path d="M17 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" />
                        </svg>
                        <span class="ms-3 font-semibold">Kesiswaan</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/struktur-organisasi" class="flex items-center p-2 rounded-lg
                    {{ request()->is('admin/struktur-organisasi') ? 'bg-secondaryColor text-black' : 'text-white' }}
                    hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-empathize">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                            <path
                                d="M12 21.368l5.095 -5.096a3.088 3.088 0 1 0 -4.367 -4.367l-.728 .727l-.728 -.727a3.088 3.088 0 1 0 -4.367 4.367l5.095 5.096z" />
                        </svg>
                        <span class="ms-3 font-semibold">Struktur Organisasi</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/daftar-guru" class="flex items-center p-2 rounded-lg
                    {{ request()->is('admin/daftar-guru') ? 'bg-secondaryColor text-black' : 'text-white' }}
                    hover:text-black hover:bg-secondaryColor group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-check">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                            <path d="M13.5 6.5l4 4" />
                            <path d="M15 19l2 2l4 -4" />
                        </svg>
                        <span class="ms-3 font-semibold">Daftar Guru</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-24">
            @yield('content')
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var dropdownToggle = document.getElementById('dropdown-toggle');
            var dropdownMenu = document.getElementById('dropdown-user');

            dropdownToggle.addEventListener('click', function () {
                var ariaExpanded = dropdownToggle.getAttribute('aria-expanded') === 'true' || false;
                dropdownToggle.setAttribute('aria-expanded', !ariaExpanded);
                dropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (event) {
                if (!dropdownToggle.contains(event.target)) {
                    dropdownToggle.setAttribute('aria-expanded', 'false');
                    dropdownMenu.classList.add('hidden');
                }
            });

            //mobile sidebar
            const button = document.querySelector('[data-drawer-toggle="logo-sidebar"]');
            const sidebar = document.getElementById('logo-sidebar');
            button.addEventListener('click', function () {
                sidebar.classList.toggle('-translate-x-full');
            });

            //active page sidebar admin
            const isActiveProgramKeahlian = {
                !!json_encode(request() - > is('admin/program-keahlian'))!!
        };
        const isActiveJadwal = {
                !!json_encode(request() - > is('admin/jadwal'))!!
            };
        const isActiveBerita = {
                !!json_encode(request() - > is('admin/berita'))!!
            };
        const isActivePrestasi = {
                !!json_encode(request() - > is('admin/prestasi'))!!
            };
        const isActiveTentangKami = {
                !!json_encode(request() - > is('admin/tentang-kami'))!!
            };
        const isActiveKesiswaan = {
                !!json_encode(request() - > is('admin/kesiswaan'))!!
            };
        const isActiveStrukturOrganisasi = {
                !!json_encode(request() - > is('admin/struktur-organisasi'))!!
            };
        const isActiveDaftarGuru = {
                !!json_encode(request() - > is('admin/daftar-guru'))!!
            };
        });
    </script>
</body>

</html>