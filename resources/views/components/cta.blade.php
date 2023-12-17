<section id="cta" class="bg-sky-600 py-20 relative shadow-md">
    <div class="relative z-20 flex items-center flex-col lg:flex-row lg:justify-between m-auto px-4 xl:max-w-6xl lg:max-w-4xl md:max-w-2xl sm:max-w-lg">
        <h3 class="text-white text-center text-xl mb-4 lg:mb-0">Inscreva-se para a sua <span class="text-orange-400 font-semibold">1º</span> Consultoria Contábil <span class="text-orange-400 font-semibold">GRÁTIS</span></h3>

        <form id="form-1" method="POST" action="{{ route('simple-subscriber') }}">
            @csrf
            <div class="flex relative">
                <input class="border-none rounded-s @if( session('err') ) placeholder:text-red-500 @endif" type="text" name="email" placeholder="Seu endereço de e-mail" value="{{ old('email') }}">

                @if( session('err') )
                    <p class="text-xs absolute top-11 text-semibold text-rose-500">{{ session('err') }}</p>
                @endif
                
                @if( session('succ') )
                    <p class="text-xs absolute top-11 text-semibold text-green-300">{{ session('succ') }}</p>
                @endif

                <button id="submitButton-1" type="submit" class="px-3 py-2 text-white bg-sky-800 rounded-e" onclick="submitForm1()">
                    <span id="submitButtonText-1">Inscrever</span>
                    <span id="loadingSpinner-1" class="hidden">
                        <svg role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                            </svg>
                        Enviando...
                    </span>
                </button>
            </div>
        </form>
    </div>
</section>