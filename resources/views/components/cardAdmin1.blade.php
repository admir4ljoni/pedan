@props(['title' => '', 'image' => '', 'date' => '', 'icon1' => '', 'icon2' => '', 'showDividerLine' => true, ]) <!-- Prop baru untuk menentukan apakah pembatas harus ditampilkan -->

<div class="relative">
    <img src="{{ $image }}" alt="" class="rounded-lg w-full md:w-72 h-72 object-cover brightness-50" />
    <p class="absolute left-0 right-0 bottom-14 flex justify-start text-white font-bold text-md capitalize mx-3">
        {{ $title }}
    </p>
    @if ($showDividerLine)
        <!-- Menampilkan pembatas hanya jika showDivider adalah true -->
        <div class="absolute w-1/3 h-1 rounded-lg bg-secondaryColor bottom-12 md:bottom-10 left-0 right-0 mx-3"></div>
    @endif
    <p class="absolute bottom-4 left-0 right-0 text-white text-md font-bold mt-2 mx-3 md:mt-0 md:bottom-2">
        {{ $date }}
    </p>

    <span class="absolute top-3 right-3 flex flex-row gap-2">
        {{ $icon1 }}
        {{ $icon2 }}
    </span>
</div>
