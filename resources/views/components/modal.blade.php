<div id="{{ $id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-1/2 left-1/2 z-50 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-2xl">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-lg border-2 border-gray-300">
            <div class="flex items-center justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 uppercase">
                    {{ $title }}
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div class="mb-10">
                        {{ $content }}
                    </div>
                    <button type="submit"
                        class="mx-auto w-1/2 flex justify-center text-black bg-secondaryColor font-bold rounded-lg text-sm px-5 py-3 text-center">SIMPAN
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
