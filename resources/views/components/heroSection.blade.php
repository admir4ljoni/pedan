    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-[520px]">
            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="/assets/images3.jpeg" class="w-full h-full object-cover" alt="carousel image">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-16 md:mt-80 ml-20 md:ml-28 z-0 ">
                    <h1 class="font-bold text-white text-xl md:text-3xl uppercase mr-16 md:mr-28"> Upacara Hardiknas 2024 </h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-base md:text-2xl capitalize mr-16 md:mr-28">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="/assets/batikk.jpg" class="w-full h-full object-cover" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-16 md:mt-80 ml-20 md:ml-28 z-0 ">
                    <h1 class="font-bold text-white text-xl md:text-3xl uppercase mr-16 md:mr-28">P5</h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-base md:text-2xl capitalize mr-16 md:mr-28">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, pariatur.
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="/assets/lksss.jpeg" class="w-full h-full object-cover" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-16 md:mt-80 ml-20 md:ml-28 z-0 ">
                    <h1 class="font-bold text-white text-xl md:text-3xl uppercase mr-16 md:mr-28">LKS 2023</h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-base md:text-2xl capitalize mr-16 md:mr-28">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, pariatur.
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <div class="absolute block w-full -translate-x-1/2 left-1/2">
                    <img src="/assets/seminarr.jpg" class="w-full h-full object-cover" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-t from-primaryColor"></div>
                </div>
                <div class="absolute top-0 mt-16 md:mt-80 ml-20 md:ml-28 z-0 ">
                    <h1 class="font-bold text-white text-xl md:text-3xl uppercase mr-16 md:mr-28">Seminar Membangun Budaya Displin </h1>
                    <h2 id="limited-text"
                        class="font-medium text-white text-base md:text-2xl capitalize mr-16 md:mr-28">
                        Kreasi catwalk dan fashion show
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div id="carousel-indicators" class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        </div>


        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-secondaryColor">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-secondaryColor">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('default-carousel');
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const totalItems = items.length;
            let currentIndex = 0;

            function showItem(index) {
                items.forEach((item, i) => {
                    item.classList.add('hidden');
                });
                items[index].classList.remove('hidden');
                updateIndicators(index);
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalItems;
                showItem(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                showItem(currentIndex);
            }

            function updateIndicators(index) {
                const indicatorsContainer = document.getElementById('carousel-indicators');
                indicatorsContainer.innerHTML = ''; // Clear existing indicators
                for (let i = 0; i < totalItems; i++) {
                    const indicator = document.createElement('button');
                    indicator.type = 'button';
                    indicator.classList.add('w-3', 'h-3', 'rounded-full', 'bg-gray-200');
                    indicator.setAttribute('aria-current', 'false');
                    indicator.setAttribute('aria-label', `Slide ${i + 1}`);
                    indicator.setAttribute('data-carousel-slide-to', i);
                    indicatorsContainer.appendChild(indicator);
                }
                const indicators = indicatorsContainer.querySelectorAll('[data-carousel-slide-to]');
                indicators[index].setAttribute('aria-current', 'true');
                indicators[index].classList.remove('bg-gray-200');
                indicators[index].classList.add('bg-secondaryColor');
            }

            const nextButton = carousel.querySelector('[data-carousel-next]');
            const prevButton = carousel.querySelector('[data-carousel-prev]');

            nextButton.addEventListener('click', nextSlide);
            prevButton.addEventListener('click', prevSlide);

            // Auto slide
            setInterval(nextSlide, 5000); // Change slide every 5 seconds

            // Show initial slide
            showItem(currentIndex);
        });
    </script>

