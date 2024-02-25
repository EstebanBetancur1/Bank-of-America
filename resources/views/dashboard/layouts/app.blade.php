<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('description')">
        @vite('resources/css/app.css')
        @yield('head')
    </head>
    <body>
        @include('dashboard.layouts.header')
        @yield('contenido')
        @vite('resources/js/app.js')

        @yield('scripts')
        <script>
    
        $(document).ready(function() {
            var table = $('#example').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json',
                    info: "Mostrando _START_ de _TOTAL_ resultados",

                },
                ordering: false,
                // select: true,
                lengthChange: false,
                // searching: true,
                pagingType: 'numbers',
                // pageLength: 20,
            
            });
          } );
        </script>

    
    </body>
</html>
