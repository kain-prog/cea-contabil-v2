<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>CeA - Contábil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    </head>
    <body>
        <x-pre-header />
        <x-header />
        <x-carousel-banner />
        <x-about-section />
        <x-infos />
        <x-services-section />



        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
