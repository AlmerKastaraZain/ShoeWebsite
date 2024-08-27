@props(['title', 'type', 'price', 'link'])

<a href="{{ $link }}" class="min-w-[200px] [&>*>img]:hover:scale-125 hover:bg-blue-600 hover:text-white transition-colors p-4">
    <div class="overflow-hidden">
        <img class="w-[200px] transition-transform" {{ $attributes }}>
    </div>
    <div class="pb-10 flex flex-col gap-1">
        <h3 class="mt-2 text-[16px] font-bold">{{ $title }}</h3>
        <p class="font-light text-[10px] opacity-80"> {{ $type }} </p>
        <p class="font-semibold text-[12px]"> {{ $price }} </p>
    </div>
</a>