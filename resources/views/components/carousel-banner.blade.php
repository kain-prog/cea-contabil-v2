<section class="relative" data-carousel="slide">

    <div id="carousel-height" class="overflow-hidden relative">

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="{{ asset('assets/images/escritorio-banner1.jpg') }}" class=" brightness-75 object-cover h-full block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="Banner mulher com o celular num ambiente de trabalho.">
            <div class="pointer-events-none flex flex-col items-center absolute overflow-visible top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 m-auto max-w-3xl">
                <h3 class="desc-banner text-base font-semibold text-orange-500 mb-3">NÓS ACONSELHAMOS</h3>
                <h2 class="text-5xl text-center mb-9 leading-tight font-bold text-white">Consultoria Financeira Especializada</h2>
                <a href="{{ route('contact') }}" class="z-30 pointer-events-auto relative py-3 px-6 bg-sky-600 text-white rounded-md text-xs font-bold hover:bg-sky-500 border border-sky-600 transition-all duration-200 hover:text-white-600">CONECTE-SE CONOSCO</a>
            </div>
        </div>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/escritorio-banner2.jpg') }}" class="brightness-75 object-cover h-full block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="Uma mulher loira sorrindo.">
            <div class="pointer-eventss-none flex flex-col items-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 m-auto max-w-3xl">
                <h3 class="desc-banner text-base font-semibold text-orange-500 mb-3">NÓS DAMOS SUPORTE</h3>
                <h2 class="text-5xl text-center mb-9 leading-tight font-bold text-white">O Melhor Suporte Empresarial</h2>
                <a href="{{ route('contact') }}" class="z-30 pointer-events-auto py-3 px-6 bg-sky-600 text-white rounded-md text-xs font-bold hover:bg-sky-500 border border-sky-600 transition-all duration-200 hover:text-white-600">CONECTE-SE CONOSCO</a>
            </div>
        </div>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/escritorio-banner3.jpg') }}" class="brightness-75 object-cover h-full block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="Uma mulher de cabelo preto sorrindo.">
            <div class="pointer-eventss-none flex flex-col items-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 m-auto max-w-3xl">
                <h3 class="desc-banner text-base font-semibold text-orange-500 mb-3">NÓS EVOLUÍMOS</h3>
                <h2 class="text-5xl text-center mb-9 leading-tight font-bold text-white">Ajudamos a Sua Empresa a Crescer</h2>
                <a href="{{ route('contact') }}" class="py-3 px-6 bg-sky-600 text-white rounded-md text-xs font-bold hover:bg-sky-500 border border-sky-600 transition-all duration-200 hover:text-white-600">CONECTE-SE CONOSCO</a>
            </div>
        </div>
    </div>

    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
</section>