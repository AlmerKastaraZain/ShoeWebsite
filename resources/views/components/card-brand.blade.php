@props(['link'])

<a class="hover:translate-y-3 transition-transform" href={{ $link }}>
    <img class="w-[2z50px]" {{ $attributes }}>
    <div class="pt-6 pb-20 pl-4">
        <h3 class="mb-2">{{ $slot }}</h3>
        <p class="underline hover:opacity-60 transition-opacity">
           Shop
        </p>
    </div>
</a>