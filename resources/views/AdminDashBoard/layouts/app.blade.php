<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('description')">
        @vite('resources/css/app.css')
    </head>
    <body>
        @yield('contenido')
        @vite('resources/js/app.js')
    </body>
</html>
