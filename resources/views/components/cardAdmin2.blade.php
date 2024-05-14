@props(['title' => '', 'image' => '', 'icon' => '', 'desc' => '', 'list' => [], 'showList' => true, 'showDivider' => true])

<div class="relative border-2 border-gray-200 w-full h-auto rounded-lg p-5">
    <div class="flex justify-between">
        @if ($showDivider)
        <div class="flex flex-col md:flex-row gap-5 justify-center items-center">
            @if (!empty($image))
            <img src="{{ $image }}" alt="gambar"
                class="rounded-lg w-20 h-20 object-cover border-2 border-gray-200" />
            @endif
            <p class="text-lg font-bold">{{ $title }}</p>
        </div>
        @endif
        {{ $icon }}
    </div>

    <p class="mt-5 text-md font-semibold">{{ $desc }}</p>

    @if ($showList && !empty($list))
    <ol class="mt-5 list-disc list-inside text-md font-semibold">
        @foreach ($list as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ol>
    @endif
</div>
