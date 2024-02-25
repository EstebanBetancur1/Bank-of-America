<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('description')">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @vite('resources/css/app.css')
        @vite('resources/css/hamburger.css')
        @vite('resources/css/tarjetas.css')

    </head>
    <body>
        @include('layouts.header')
        @yield('contenido')
        @vite('resources/js/app.js')
        @vite('resources/js/hamburger.js')
        @vite('resources/js/swiper.js')
    </body>
</html>
