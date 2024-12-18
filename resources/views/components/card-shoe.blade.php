@props(['title', 'type', 'price', 'link'])

<a href="{{ $link }}" class="min-w-[200px] [&>*>img]:hover:scale-125 hover:bg-blue-600 hover:text-white transition-colors p-4">
    <div class="overflow-hidden">
        <img class="w-[200px] h-[200px] transition-transform" {{ $attributes }}>
    </div>
    <div class="py-4 flex flex-col gap-1">
        <h3 class="mt-2 text-[16px] font-bold">{{ $title }}</h3>
        <p class="text-[12px] opacity-80">{{ $type }}</p>
        <p class="font-semibold text-[12px]"> Rp. {{ number_format($price)  }} </p>
    </div>
</a>