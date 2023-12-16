<section class="bg-zinc-100 pt-24">
    <div class="m-auto px-4 xl:max-w-6xl lg:max-w-4xl md:max-w-2xl sm:max-w-lg">
        <div class="m-auto">

            <div class="mb-0 lg:mb-16 shadow-lg order-last lg:order-first flex flex-col flex-col-reverse lg:flex-row lg:justify-end lg:items-stretch lg:col-span-1">
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
                            <p><span class="text-white font-semibold">E-mail:</span> <a class="text-slate-300" href="mailto:info@ceacontabill@gmail.com">ceacontabill@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="relative z-20 mb-12 flex w-full items-center">
                        <div class="flex items-center justify-center">
                            <span class="fa-solid fa-earth-americas rounded-full p-4 border-slate-300 border flex text-center text-white" style="width: 50px; height: 50px;"></span>
                        </div>
                        <div class="pl-3">
                            <p><span class="text-white font-semibold">Website:</span> <a class="text-slate-300" href="{{ route('home') }}">ceacontabilxxxx</a></p>
                        </div>
                    </div>
                    <div class="relative z-20 flex w-full justify-center items-center">
                        <img src="assets/images/logo-3.png" style="max-width: 40px; height: 40px" alt="Logomarca CeA Contábil com fundo branco.">
                    </div>
                </div>
                <div class="w-full bg-white px-14 py-10 flex-grow">
                    <h3 class="mb-4 text-xl">
                        <i class="fa-solid fa-envelope-circle-check text-2xl text-sky-600"></i>
                        -
                        Nos envie um e-mail
                    </h3>
                    <div id="form-message-warning" class="mb-8"></div>
                    <div id="form-message-success" class="mb-8 text-green-400 font-semibold">Sua mensagem foi enviada com sucesso!</div>
                    <form method="POST" id="contactForm" action="{{ route('sendmail') }}" class="contactForm">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label class="label text-xs font-semibold" for="name">NOME COMPLETO</label>
                                <input type="text" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent" name="name" id="name" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label class="label text-xs font-semibold" for="email">ENDEREÇO DE EMAIL</label>
                                <input type="email" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-span-2">
                                <label class="label text-xs font-semibold" for="subject">ASSUNTO</label>
                                <input type="text" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent" name="subject" id="subject" placeholder="Assunto">
                            </div>
                            <div class="form-group col-span-2">
                                <label class="label text-xs font-semibold" for="message">MENSAGEM</label>
                                <textarea name="message" class="text-xs py-3 px-0 w-full form-control border-x-transparent border-t-transparent border-b border-b placeholder:text-xs focus:border-t-transparent focus:border-x-transparent focus:outline-none focus:ring focus:ring-transparent" id="message" cols="30" rows="4" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="form-group col-span-2">
                                <input type="submit" value="ENVIAR MENSAGEM" class="bg-sky-600 text-xs rounded shadow-md cursor-pointer px-4 py-4 text-white font-bold hover:bg-sky-800 transition-all duration-200">
                                <div class="submitting"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>      
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.5810759000356!2d-43.07064402381642!3d-22.817981734705015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x999b0ff60d8781%3A0x6fe18027cbe5eadb!2sR.%20Ramos%20Costa%20-%20Porto%20da%20Pedra%2C%20S%C3%A3o%20Gon%C3%A7alo%20-%20RJ%2C%2024436-310!5e0!3m2!1spt-BR!2sbr!4v1702674004614!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>