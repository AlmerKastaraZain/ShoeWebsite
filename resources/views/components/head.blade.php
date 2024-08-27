<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liceria</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/bBH5av01 1(4).svg') }}">
        <!----- Google Font ----->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="body">
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
    </body>
</html>
