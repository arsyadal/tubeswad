<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex bg-gray-100">
            <div class="w-1/2 h-screen bg-center bg-cover bg-no-repeat fixed top-0" style="background-image: url('{{ asset('assets/guestWallpaper.jpg') }}')">
            </div>
                <!-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> -->
            <div class="w-1/2"></div>
            <div class="w-1/2 grid place-items-center px-6 py-4">
                    {{ $slot }}
            </div>
        </div>
    </body>
</html>
