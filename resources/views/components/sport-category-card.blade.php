@props(['link'])

<a class="hover:translate-y-3 transition-transform [&>div>img]:hover:scale-125" href={{ $link }}>
    <div class="overflow-hidden">
        <img class="max-w-4xl transition-transform" {{ $attributes }}>
    </div>
    <div class="flex justify-center w-[100%] ">
        <h3 class="mb-2 bg-white px-3 py-[2px] rounded-full -translate-y-14">{{ $slot }}</h3>
    </div>
</a>