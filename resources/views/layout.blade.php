<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> --}}


        {{-- <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"> --}}
        {{-- <link rel="stylesheet" href="assets/css/animate.css"> --}}
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>CeA - Contábil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    </head>
    <body>
        <x-pre-header />
        <x-header />
        <x-carousel-banner />




    </body>
</html>
