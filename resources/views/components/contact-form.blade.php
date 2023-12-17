<section id="contact-form" class="bg-zinc-100 pt-24 lg:pb-16">
    <div class="m-auto px-4 xl:max-w-6xl lg:max-w-4xl md:max-w-2xl sm:max-w-lg">
        <div class="m-auto">

            <div class="mb-0 shadow-lg order-last lg:order-first flex flex-col flex-col-reverse lg:flex-row lg:justify-end lg:items-stretch lg:col-span-1">
                <div id="infos-contact" class="relative bg-sky-600 px-8 pt-10 pb-10 w-full lg:w-6/12 flex flex-col justify-center items-center lg:items-start lg:col-span-1">
                    <h3 class="relative z-20 text-3xl mb-3 text-white text-center xl:text-left">Fale Conosco Agora!</h3>
                    <p class="relative z-20 mb-12 text-slate-300 text-base text-center">Vamos avançar juntos em direção aos seus objetivos. Entre em contato e descubra como podemos fazer a diferença para o seu sucesso!</p>
                    <div class="relative z-20 flex w-full mb-4 items-center">
                        <div class="flex items-center justify-center">
                            <span class="fa-solid fa-location-dot rounded-full p-4 border-slate-300 border flex text-center text-white" style="width: 50px; height: 50px;"></span>
                        </div>
                        <div class="pl-3">
                            <p class="text-slate-300"><span class="text-white font-semibold">Endereço:</span> Rua Ramos Costa Frente - Porto da Pedra, São Gonçalo - RJ, 24436-310</p>
                        </div>
                    </div>
                    <div class="relative z-20 flex w-full mb-4 items-center">
                        <div class="flex items-center justify-center">
                            <span class="fa-solid fa-phone rounded-full p-4 border-slate-300 border flex text-center text-white" style="width: 50px; height: 50px;"></span>
                        </div>
                        <div class="pl-3">
                            <p><span class="text-white font-semibold">Telefone:</span> <a class="text-slate-300" href="tel://1234567920">+55 21 96623-6818</a></p>
                        </div>
                    </div>
                    <div class="relative z-20 flex w-full mb-4 items-center">
                        <div class="flex items-center justify-center">
                            <span class="fa-solid fa-paper-plane rounded-full p-4 border-slate-300 border flex text-center text-white" style="width: 50px; height: 50px;"></span>
                        </div>
                        <div class="pl-3 ">
                            <p><span class="text-white font-semibold">E-mail:</span> <a class="text-slate-300" href="mailto:info@contato@ceacontabil.com">contato@ceacontabil.com</a></p>
                        </div>
                    </div>
                    <div class="relative z-20 mb-12 flex w-full items-center">
                        <div class="flex items-center justify-center">
                            <span class="fa-solid fa-earth-americas rounded-full p-4 border-slate-300 border flex text-center text-white" style="width: 50px; height: 50px;"></span>
                        </div>
                        <div class="pl-3">
                            <p><span class="text-white font-semibold">Website:</span> <a class="text-slate-300" href="{{ route('home') }}">https://ceacontabil.com</a></p>
                        </div>
                    </div>
                    <div class="relative z-20 flex flex-col w-full justify-center items-center">
                        <img src="assets/images/logo-3.png" style="max-width: 40px; height: 40px" alt="Logomarca CeA Contábil com fundo branco.">
                        <h1 class="text-center text-white text-sm mt-1">CeA Contábil</h1>
                    </div>
                </div>
                <div class="w-full bg-white px-14 py-10 flex-grow">
                    <h3 class="mb-4 text-xl">
                        <i class="fa-solid fa-envelope-circle-check text-2xl text-sky-600"></i>
                        -
                        Nos envie um e-mail
                    </h3>
                    <form id="form-3" method="POST" action="{{ route('sendmail') }}" class="mt-12">
                        @csrf
                        <div class="flex flex-col md:grid md:grid-cols-2 md:grid-cols-2 gap-4 w-full">
                            <div class="form-group">
                                <label class="label text-xs font-semibold" for="name">NOME COMPLETO</label>
                                <input type="text" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent @if(( session('err-name2'))) border-b-red-500 placeholder:text-red-500 @endif" name="name" value="{{ old('name') }}" id="name" placeholder="Nome">
                            
                                @if( session('err-name2') )
                                    <p style="font-size:11px" class="text-red-500">{{ session('err-name2') }}</p>
                                @endif

                            </div>
                            <div class="form-group">
                                <label class="label text-xs font-semibold" for="email">ENDEREÇO DE EMAIL</label>
                                <input type="email" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent @if(( session('err-mail2'))) border-b-red-500 placeholder:text-red-500 @endif" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                            
                                @if( session('err-mail2') )
                                    <p style="font-size:11px" class="text-red-500">{{ session('err-mail2') }}</p>
                                @endif
                            
                            </div>
                            <div class="form-group col-span-2">
                                <label class="label text-xs font-semibold" for="subject">ASSUNTO</label>
                                <input type="text" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent @if(( session('err-subj'))) border-b-red-500 placeholder:text-red-500 @endif" name="subject" value="{{ old('subject') }}" id="subject" placeholder="Assunto">
                            
                                @if( session('err-subj') )
                                    <p style="font-size:11px" class="text-red-500">{{ session('err-subj') }}</p>
                                @endif
                                                        
                            </div>
                            <div class="form-group col-span-2">
                                <label class="label text-xs font-semibold" for="message">MENSAGEM</label>
                                <textarea class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent @if(( session('err-message2'))) border-b-red-500 placeholder:text-red-500 @endif" name="message" value="{{ old('message') }}" id="message" cols="30" rows="4" placeholder="Mensagem"></textarea>
                            
                                @if( session('err-message2') )
                                    <p style="font-size:11px" class="text-red-500">{{ session('err-message2') }}</p>
                                @endif
                            
                            </div>
                            <div class="form-group col-span-2">
                                <button id="submitButton-3" type="submit" class="bg-sky-600 text-xs rounded shadow-md cursor-pointer px-4 py-4 text-white font-bold hover:bg-sky-800 transition-all duration-200" onclick="submitForm3()">
                                    <span id="submitButtonText-3">ENVIAR MENSAGEM</span>
                                    <span id="loadingSpinner-3" class="hidden">
                                        <svg role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                        </svg>
                                        ENVIANDO...
                                    </span>
                                </button>
                            </div>
                        </div>

                        @if( session( 'succ-form3' ))
                            <p class="mt-16 text-md text-green-500">{{ session('succ-form3') }}</p>
                         @endif
                    </form>
                </div>
            </div> 
        </div>      
    </div>
</section>