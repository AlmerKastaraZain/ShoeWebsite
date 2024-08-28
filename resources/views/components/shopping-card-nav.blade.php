@props(['title', 'type', 'price'])

<div class="bg-white shadow-md p-4 rounded-lg flex">
    <img width="92px" {{ $attributes }} alt="shoe" />
    <div class="flex flex-col justify-center gap-1 pl-8">
        <h2 class="font-bold text-2xl">{{ $title }}</h2>
        <p class="text-gray-500 text-sm">{{ $type }}</p>
        <p class="text-gray-500 text-sm">{{ $price }}</p>
    </div>
</div>