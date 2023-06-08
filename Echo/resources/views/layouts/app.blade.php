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

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
        <link rel="stylesheet" href="{{asset('css/bases.css')}}">
        <link rel="stylesheet" href="{{asset('css/home.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased color-texto-blanco">
        <div class="min-h-screen bg-color-fondo-300 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-color-fondo-300 shadow">
                    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 2xl:px-36">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="bg-color-fondo-300 mx-auto py-6 px-4 sm:px-6 lg:px-8 xl:px-10 2xl:px-10">
                {{ $slot }}
            </main>
             @include('layouts.footer')
        </div>
        <script src="{{asset('js/profile.js')}}"></script>
        <script src="{{asset('js/bases.js')}}"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        @livewireScripts
    </body>
</html>
