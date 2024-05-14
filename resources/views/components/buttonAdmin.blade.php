@props(['id' => '', 'title' => '', 'type' => ''])
<button type="{{ $type }}" id="{{ $id }}"
    class="mb-10 flex w-auto justify-center rounded-md bg-secondaryColor hover:bg-yellow-500 px-3 py-3 text-md font-bold leading-6 text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">
    <span class="mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
        </svg>
    </span>
    {{ $title }}
</button>
