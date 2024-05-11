<div
    class="flex justify-between items-center w-80 hover:bg-gray-200 bg-gray-100 border border-gray-200 rounded-md shadow-md">
    <div class="flex items-center gap-x-3">
        <span class="w-20 h-20 flex justify-center items-center rounded-lg">
            {{$slot}}
        </span>
        <div>
            <p class="text-base font-semibold text-gray-800 ml-2">{{ $title }}</p>
        </div>
    </div>
    <div class="inline-flex items-center gap-x-2 mr-5">
        <span class="text-gray-500 hover:text-gray-800">
            {{ $icon }}
            </svg>
        </span>
        <span class="text-gray-500 hover:text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#d70000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 7l16 0" />
                <path d="M10 11l0 6" />
                <path d="M14 11l0 6" />
                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
            </svg>
        </span>
    </div>
</div>
