<footer class="bg-neutral-800 text-white">
    <div class="mx-max">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-1 md:col-span-2 px-8 pt-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="col-span-1">
                        <h2 class="text-lg font-bold mb-4">SOBRE NÓS</h2>
                        <p class="text-gray-400 text-sm">Muito mais do que um escritório de Contabilidade, auxiliamos você a economizar 
                            tempo para focar nas atividades chaves do seu negócio com confiança e tranquilidade.
                        </p>
                        <ul class="flex p-0 mt-4">
                            <li class="mr-4 "><a target="_blank" href="https://facebook.com/ceacontabil" ><i class="fa-brands fa-facebook-f text-md text-white p-3 bg-neutral-700 rounded-full flex items-center justify-center hover:text-sky-600 transition-all duration-200" style="display: flex; width: 40px; height: 40px;"></i></a></li>
                            <li class="mr-4 "><a target="_blank" href="https://instagram.com/ceacontabil" ><i class="fa-brands fa-instagram text-md text-white p-3 bg-neutral-700 rounded-full flex items-center justify-center hover:text-sky-600 transition-all duration-200" style="width: 40px; height: 40px;"></i></a></li>
                            <li><a target="_blank" href="https://linkedin.com/in/ceacontabil"><i class="fa-brands fa-linkedin-in text-md text-white p-3 bg-neutral-700 rounded-full flex items-center hover:text-sky-600 transition-all duration-200" style="width: 40px; height: 40px;"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-span-2">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="col-span-1">
                                <h2 class="text-lg font-bold mb-4">SERVIÇOS</h2>
                                <ul class="list-none p-0">
                                    <li><p class="cursor-pointer w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200" data-modal-target="modalFirstService" data-modal-toggle="modalFirstService">Legalização e Abertura de Empresas</p></li>
                                    <li><p class="cursor-pointer w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200" data-modal-target="modalSecondService" data-modal-toggle="modalSecondService">Fiscal e DP</p></li>
                                    <li><p class="cursor-pointer w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200" data-modal-target="modalThirdService" data-modal-toggle="modalThirdService">Contabilidade de Empresas</p></li>
                                    <li><p class="cursor-pointer w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200" data-modal-target="modalFourthService" data-modal-toggle="modalFourthService">Imposto de Renda</p></li>
                                    <li><p class="cursor-pointer w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200" data-modal-target="modalFifthService" data-modal-toggle="modalFifthService">Consultoria e Assessoria Contábil</p></li>
                                    <li><p class="cursor-pointer w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200" data-modal-target="modalSixthService" data-modal-toggle="modalSixthService">MEI</p></li>
                                </ul>
                            </div>
                            <div class="col-span-1">
                                <h2 class="text-lg font-bold mb-4">DESCUBRA</h2>
                                <ul class="list-none p-0">
                                    <li><a href="{{ route('home')}}#about" class="w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200">Sobre nós</a></li>
                                    <li><a href="{{ route('home')}}#services" class="w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200">Serviços</a></li>
                                    <li><a href="{{ route('contact') }}" class="w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200">Contato</a></li>
                                    <li><a href="{{ route('politicas-pv') }}" class="w-fit inline-block py-1 text-sm text-gray-400 hover:text-sky-600 transition-all duration-200">Políticas de Privacidade</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 py-10">
                    <p class="text-sm inline text-gray-400">Copyright &copy; <script>document.write(new Date().getFullYear());</script> - Todos os direitos reservados | Feito por: <a class="text-sky-600" href="https://digitallabor.com.br">Digital Labor</a> </p>
                    <div class="flex items-center mt-4">
                        <a class="w-min flex" href="https://digitallabor.com.br" title="Digital Labor" target="_blank"><img src="assets/images/digitallabor-logo.png" style="max-width: 50px; height: max;" alt="Logomarca da digitallabor."></a>
                        <a class="w-min flex ml-3" href="#" title="CeA - Contábil" target="_blank"><img src="assets/images/logo-3.png" style="max-width: 40px; height: 40px" alt="Logomarca CeA Contábil com fundo branco."></a>
                    </div>
                </div>
            </div>
            <div class="md:pb-8 md:pt-12 bg-neutral-700 p-8 lg:max-w-">
                <h2 class="text-lg font-bold mb-10">1º CONSULTORIA GRATUITA</h2>
                <form id="form-2" method="POST" action="{{ route('subscriber') }}" class="form-consultation ">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="w-full m-auto text-sm rounded-md py-3 px-4 bg-neutral-600 focus:outline-none focus:ring-sky-600 @if( session('err-name')) border-red-500 placeholder:text-red-500 @else border-none focus:border-none placeholder:text-gray-300 @endif" name="name" value="{{ old('name') }}" placeholder="Seu Nome">
                        
                        @if( session('err-name') )
                            <p class="text-xs ml-3 text-semibold text-red-500">{{ session('err-name') }}</p>
                        @endif

                    </div>
                    <div class="mb-3">
                        <input type="text" class="w-full text-sm rounded-md py-2 px-4 bg-neutral-600 focus:outline-none focus:ring-sky-600 @if( session('err-mail')) border-red-500 placeholder:text-red-500 @else border-none focus:border-none placeholder:text-gray-300 @endif" name="email" value="{{ old('email') }}" placeholder="Seu E-mail">
                    
                        @if( session('err-mail') )
                            <p class="text-xs ml-3 text-semibold text-red-500">{{ session('err-mail') }}</p>
                        @endif
                    
                    </div>
                    <div class="mb-3">
                        <textarea cols="30" rows="3" class="w-full text-sm text-white bg-neutral-600 rounded-md py-2 px-4 focus:outline-none focus:ring-sky-600 @if( session('err-message')) border-red-500 placeholder:text-red-500 @else border-none focus:border-none placeholder:text-gray-300 @endif" value="{{ old('message') }}" name="message" placeholder="Mensagem"></textarea>
                        
                        @if( session('err-message') )
                            <p class="text-xs ml-3 text-semibold text-red-500">{{ session('err-message') }}</p>
                        @endif
                    
                    </div>
                    <div>
                        <button id="submitButton-2" type="submit" class="w-full bg-sky-600 text-white py-2 px-4 rounded-md hover:bg-sky-700 focus:outline-none focus:ring-sky-600" onclick="submitForm2()">
                            <span id="submitButtonText-2">Enviar Mensagem</span>
                            <span id="loadingSpinner-2" class="hidden">
                                <svg role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                Enviando...
                            </span>
                        </button>
                    </div>
                    @if( session('succ-form-2') )
                        <p class="text-sm mt-7 text-semibold text-green-300">{{ session('succ-form-2') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
</footer>
