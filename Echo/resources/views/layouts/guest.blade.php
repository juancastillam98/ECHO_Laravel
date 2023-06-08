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
        <!--CSS-->
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.navigation')
        <section class="portada">
            <div class="portada-foto flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                <div>
                    <a href="/">
                        <img src="{{asset('storage/logo/logo_texto_sin_fondo.png')}}" class="w-20 h-auto fill-current" alt="">
                    </a>
                </div>

                <div  class="w-full sm:max-w-md mt-6 px-6 py-4 bg-indigo-950 rounded-lg border-cyan-300">
                    {{ $slot }}
                </div>
            </div>
        </section>
    </body>
</html>
