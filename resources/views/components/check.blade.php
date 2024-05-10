@props(['title' => '',])
<div class="flex flex-row gap-4 items-center">
    <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
            stroke="#E5BC20" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-check bg-primaryColor rounded-full p-1">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l5 5l10 -10" />
        </svg>
    </div>
    <div class="">
        <p class="text-xl font-bold mt-1">{{ $title }}</p>
    </div>
</div>
