<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex">
            @include('layouts.aside')

            <!-- Page Heading -->

            <!-- Page Content -->
            <main class="w-full">

                @include('layouts.navigation')
                

                <div class="px-[5vw] w-full">
                    @isset($header)
                    <header class="mt-8 ml-4">
                        {{ $header }}
                    </header>
                    @endisset
                    <div class="bg-white outline outline-1 w-full p-4 mb-10 rounded-lg mt-4 ">
                        {{ $slot }}
                    </div>
                </div>

            </main>
        </div>
    </body>
</html>