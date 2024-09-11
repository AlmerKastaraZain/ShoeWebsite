
<x-loader>
    <x-sidebar />
    <x-navbar-top />
    <x-navbar />
    <div class="md:px-[20vw]">
        {{ $slot }}
    </div>
    <x-footer />
    <div id="blackCover" class="bg-black invisible opacity-25 fixed top-0 left-0 h-[100vh] w-[100vw] z-[50]"></div>
    <script src="{{ asset('js/blackCoverEffect.js') }}" defer></script>
    <x-searchbar />
</x-loader>
