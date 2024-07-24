<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->

    <div class="relative h-56 overflow-hidden md:h-[520px]">
        {{$content}}
    </div>
    <!-- Slider indicators -->
    <div id="carousel-indicators"
        class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
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
    document.addEventListener('DOMContentLoaded', function () {
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