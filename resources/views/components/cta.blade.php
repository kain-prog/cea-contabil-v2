<section id="cta" class="bg-sky-600 py-20 relative shadow-md">
    <div class="relative z-20 flex items-center flex-col lg:flex-row lg:justify-between m-auto px-4 xl:max-w-6xl lg:max-w-4xl md:max-w-2xl sm:max-w-lg">
        <h3 class="text-white text-center text-xl mb-4 lg:mb-0">Inscreva-se para a sua <span class="text-orange-400 font-semibold">1º</span> Consulta Contábil <span class="text-orange-400 font-semibold">GRÁTIS</span></h3>

        <form method="POST" action="{{ route('simple-subscriber') }}">
            @csrf
            <div class="flex">
                <input class="border-none rounded-s" type="text" name="email" placeholder="Seu endereço de e-mail">
                <button class="px-3 py-2 text-white bg-sky-800 rounded-e">Inscrever</button>
            </div>
        </form>
    </div>
</section>