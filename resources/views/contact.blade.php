<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#0284c7">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="author" content="Kain Dev">
        <meta name="keywords" content="contabilidade para empresas, serviços contábeis, mei, abertura de empresas, consultoria financeira, fiscal e dp, imposto de renda, assessoria contábil, contabilidade, serviços de contabilidade">
        <meta name="description" content="Na CeA Contábil, oferecemos serviços abrangentes de contabilidade para empresas, incluindo assessoria fiscal, contabilidade financeira, consultoria personalizada imposto de renda, abertura de MEI, legalização, fiscal e dp, assessoria contábil e abertura de empresas. Entre em contato para impulsionar o seu negócio hoje!">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>CeA - Contábil | Contato</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <main>
            <x-pre-header />
            <x-header />
            <x-banner />
            <x-contact-form />
            <x-g-maps />
            <x-footer />
            <x-privacy-bar />
            <x-wpp-flutuant/>

            <x-modal-first-service />
            <x-modal-second-service />
            <x-modal-third-service />
            <x-modal-fourth-service />
            <x-modal-fifth-service />
            <x-modal-sixth-service />
        </main>

        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/form3.js') }}"></script>
    </body>
</html>
