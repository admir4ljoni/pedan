<div class="flex justify-between items-center w-80 hover:bg-gray-200 bg-gray-100 border border-gray-200 rounded-md shadow-md">
    <div class="flex items-center gap-x-3">
        <span class="w-20 h-20 flex justify-center items-center rounded-lg">
            {{$slot}}
        </span>
        <div>
            <p class="text-base font-semibold text-gray-800 ml-2">{{ $title }}</p>
        </div>
    </div>
    <div class="inline-flex items-center gap-x-2 mr-5">
        {{ $icon }}
        </svg>
    </div>
</div>