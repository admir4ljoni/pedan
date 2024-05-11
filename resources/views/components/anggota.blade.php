@props(['name' => '', 'image' => '', 'position' => ''])

<div class="w-48 h-72 mb-7">
        <img src="{{ $image }}" alt=""
            class="rounded-lg w-full h-48 object-cover border-2 border-gray-200 shadow-md" />
        <h3 class="font-bold text-lg text-center mt-5">
            {{ $name }}</h3>
        <p class="font-bold text-gray-600 text-center text-lg">{{ $position }}</p>
</div>
