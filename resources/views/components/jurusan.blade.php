@props(['href' => '', 'image' => '', 'title' => ''])

<div class="relative">
    <a href="{{ $href }}">
        <img src="{{ $image }}" alt="jurusan smk negeri 1 pedan" class="rounded-lg w-72 h-72 object-cover brightness-50" />
        <h3
            class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center text-white font-bold text-2xl text-center capitalize mx-3">
            {{ $title }}</h3>
    </a>
</div>
