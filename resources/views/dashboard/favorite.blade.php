<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Favorite') }}
        </h2>
    </x-slot>
    <x-favorite-card />
</x-app-layout>
