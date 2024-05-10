@extends('template.user')
@section('title', 'Home')

@section('content')
    @include('components.heroSection')
    <div class="mx-12 md:mx-16">
        <div class="mx-4">
            <a href="https://wa.me/6281390756573" class="fixed bottom-8 right-10 z-50">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none"
                    stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp bg-green-600 rounded-full p-3 ">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                    <path
                        d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                </svg>
            </a>
            <h1 class="font-black text-xl md:text-3xl mt-20 text-center uppercase mb-10 md:mb-20 text-primaryColor">program
                keahlian kurikulum merdeka
            </h1>
            <div class="flex flex-wrap gap-5 justify-center">
                <x-jurusan title="akutansi & keuangan lembaga"
                    image="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-d-render-illustrating-concepts-of-accounting-and-financial-management-in-business-image_3737899.jpg"
                    href="/akuntansi-keuangan-lembaga" />
                <x-jurusan title="manajemen perkantoran & layanan bisnis"
                    image="https://img.freepik.com/free-photo/side-view-business-man-calculating-finance-numbers_23-2148793751.jpg?t=st=1715068777~exp=1715072377~hmac=0b11db447c9c24d2926eb2cb51972440554fc01645c187ad5e1eac70930fd0da&w=826"
                    href="/menajemen-perkantora" />
                <x-jurusan title="Pemasaran"
                    image="https://img.freepik.com/premium-photo/digital-design-businessman-show-increase-market-graphic_35761-546.jpg"
                    href="/pemasaran" />
                <x-jurusan title="Pengembangan Perangkat Lunak & Gim"
                    image="https://img.freepik.com/free-photo/hand-using-laptop-computer-with-virtual-screen-document-online-approve-paperless-quality-assurance-erp-management-concept_616485-61.jpg?t=st=1715069097~exp=1715072697~hmac=e0d9d78477ad667aea5349bee50c16d32f585f56f08fdeae2f9a45f298786dd4&w=740"
                    href="/pengembangan-perangkat-lunak" />
                <x-jurusan title="Teknik jaringan komputer & telekomunikasi"
                    image="https://www.gamelab.id/uploads/news/berita-335-smk-jurusan-tkj--rakit-sendiri-komputer-dan-jaringan-internetmu-20201217-213112.png"
                    href="/teknik-komputer-jaringan" />
                <x-jurusan title="broadcasting & perfilman"
                    image="https://contents.lspr.ac.id/2023/07/pengertian-broadcasting.jpg" href="/broadcasting" />
            </div>

        </div>
        <div class="flex flex-wrap justify-center mb-40 mt-20">
            <div class="flex flex-col justify-center w-64 mb-10">
                <div class="flex justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-books bg-secondaryColor rounded-full p-3">
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
                </div>
                <h2 id="keahlian" class="font-black text-4xl flex flex-wrap text-center justify-center">0</h2>
                <h2 class="font-bold text-2xl flex flex-wrap text-center justify-center">Program Keahlian</h2>
            </div>

            <div class="flex flex-col justify-center w-64 mb-10">
                <div class="flex justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-building bg-secondaryColor rounded-full p-3">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l18 0" />
                        <path d="M9 8l1 0" />
                        <path d="M9 12l1 0" />
                        <path d="M9 16l1 0" />
                        <path d="M14 8l1 0" />
                        <path d="M14 12l1 0" />
                        <path d="M14 16l1 0" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                    </svg>
                </div>
                <h2 id="rombel" class="font-black text-4xl flex flex-wrap text-center justify-center">0</h2>
                <h2 class="font-bold text-2xl flex flex-wrap text-center justify-center">Rombel</h2>
            </div>

            <div class="flex flex-col justify-center w-64 mb-10">
                <div class="flex justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-check bg-secondaryColor rounded-full p-3">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                        <path d="M13.5 6.5l4 4" />
                        <path d="M15 19l2 2l4 -4" />
                    </svg>
                </div>
                <h2 id="pendidik" class="font-black text-4xl flex flex-wrap text-center justify-center">0</h2>
                <h2 class="font-bold text-2xl flex flex-wrap text-center justify-center">Pendidik & Tendik</h2>
            </div>

            <div class="flex flex-col justify-center w-64 mb-10">
                <div class="flex justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-school bg-secondaryColor rounded-full p-3">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                    </svg>
                </div>
                <h2 id="number" class="font-black text-4xl flex flex-wrap text-center justify-center">0</h2>
                <h2 class="font-bold text-2xl flex flex-wrap text-center justify-center">Peserta Didik</h2>
            </div>


        </div>
    </div>
    <script>
        const startValue = 0;
        const duration = 3000;

        const numberElement1 = document.getElementById('number');
        const numberElement2 = document.getElementById('keahlian');
        const numberElement3 = document.getElementById('rombel');
        const numberElement4 = document.getElementById('pendidik');

        let startTime;

        function animateNumber(timestamp, endValue, numberElement) {
            if (!startTime) {
                startTime = timestamp;
            }

            const elapsedTime = timestamp - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const animatedValue = Math.floor(progress * (endValue - startValue) + startValue);

            numberElement.textContent = animatedValue;

            if (progress < 1) {
                requestAnimationFrame((timestamp) => animateNumber(timestamp, endValue, numberElement));
            }
        }

        function startAnimationIfNeeded() {
            const rect1 = numberElement1.getBoundingClientRect();
            const rect2 = numberElement2.getBoundingClientRect();
            const rect3 = numberElement3.getBoundingClientRect();
            const rect4 = numberElement4.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (
                (rect1.top >= 0 && rect1.bottom <= windowHeight) ||
                (rect2.top >= 0 && rect2.bottom <= windowHeight) ||
                (rect3.top >= 0 && rect3.bottom <= windowHeight) ||
                (rect4.top >= 0 && rect4.bottom <= windowHeight)
            )
            // set endvalue
            {
                requestAnimationFrame((timestamp) => animateNumber(timestamp, 1063, numberElement1));
                requestAnimationFrame((timestamp) => animateNumber(timestamp, 6, numberElement2));
                requestAnimationFrame((timestamp) => animateNumber(timestamp, 10, numberElement3));
                requestAnimationFrame((timestamp) => animateNumber(timestamp, 80, numberElement4));
                window.removeEventListener('scroll', startAnimationIfNeeded);
            }
        }

        window.addEventListener('scroll', startAnimationIfNeeded);
        startAnimationIfNeeded();
    </script>


@endsection
