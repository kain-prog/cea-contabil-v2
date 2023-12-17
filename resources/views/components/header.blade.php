<nav id="#header" class="flex flex-wrap justify-between w-full py-7 md:py-0 md:flex-nowrap m-auto px-4 xl:max-w-6xl lg:max-w-4xl md:max-w-2xl sm:max-w-lg">
    <h1 class="flex items-center">
        <a href="{{ route('home') }}">
            <img style="max-width: 175px" src="assets/images/cea-contabil.png" alt="Empresa CeA Contábil - especializada em soluções contábeis para empresas de todos os portes">
        </a>
    </h1>

    <div id="handle-collapse" class="flex items-center cursor-pointer md:hidden">
        <button  type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 focus:outline-none focus:ring-2 focus:ring-transparent dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-transparent" >
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <span class="select-none">MENU</span>
    </div>

    <div id="navbar" class="w-full h-full navbar w-full flex transition-all duration-200">
        <ul class="menu block md:flex items-center m-auto md:justify-evenly md:w-full md:h-full">

            @if(Request::is('contact'))
                <li class="h-full w-full justify-end mr-10 mb-5 mt-3 md:justify-none md:mb-0 md:mt-0 flex items-center"><a class="md:py-9 relative text-md md:text-sm font-semibold transition-all duration-200" href="{{ route('home') }}">HOME</a></li>
            @else
                <li class="h-full justify-center mb-5 mt-3 md:justify-none md:mb-0 md:mt-0 flex items-center"><a class="md:py-9 relative text-md md:text-sm font-semibold transition-all duration-200" href="{{ route('home') }}">HOME</a></li>
                <li class="h-full justify-center mb-5 md:justify-none md:mb-0 flex items-center" ><a class="md:py-9 relative text-md md:text-sm font-semibold hover:text-orange-400 transition-all duration-200" href="#about">SOBRE</a></li>
                <li class="h-full justify-center mb-5 md:justify-none md:mb-0 flex items-center"><a class="md:py-9 relative text-md md:text-sm font-semibold hover:text-orange-400 transition-all duration-200" href="#services">SERVIÇOS</a></li>
                <li class="h-full justify-center mb-3 md:justify-none md:mb-0 flex items-center"><a class="md:py-9 relative text-md md:text-sm font-semibold hover:text-orange-400 transition-all duration-200" href="{{ route('contact') }}">CONTATO</a></li>

            @endif
        </ul>
    </div>

</nav>