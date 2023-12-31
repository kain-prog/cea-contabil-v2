<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="theme-color" content="#0284c7">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="author" content="Kain Dev">
        <meta name="keywords" content="contabilidade para empresas, serviços contábeis, mei, abertura de empresas, consultoria financeira, fiscal e dp, imposto de renda, assessoria contábil, contabilidade, serviços de contabilidade">
        <meta name="description" content="Na CeA Contábil, oferecemos serviços abrangentes de contabilidade para empresas, incluindo assessoria fiscal, contabilidade financeira, consultoria personalizada imposto de renda, abertura de MEI, legalização, fiscal e dp, assessoria contábil e abertura de empresas. Entre em contato para impulsionar o seu negócio hoje!">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>CeA - Contábil | Home </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <main>
            <x-pre-header />
            <x-header />
            <x-carousel-banner />
            <x-about-section />
            <x-infos />
            <x-services-section />
            <x-cta />
            <x-faq />
            <x-testimonials />
            <x-footer />
            <x-privacy-bar />
            <x-wpp-flutuant/>
        </main>

        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/counter.js') }}"></script>
        <script src="{{ asset('assets/js/form1.js') }}"></script>
        <script src="{{ asset('assets/js/form2.js') }}"></script>
        <script src="{{ asset('assets/js/accordion.js') }}"></script>
    </body>
</html>
