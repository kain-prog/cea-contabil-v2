<section class="bg-zinc-100 py-24">
    <div class="m-auto px-4 xl:max-w-6xl lg:max-w-4xl md:max-w-2xl sm:max-w-lg">
        <div class="m-auto">

            <div class="order-last lg:order-first flex flex-col lg:flex-row lg:justify-end lg:items-stretch lg:col-span-1">
                
                <div class="bg-sky-600 p-5 w-full lg:w-8/12 flex flex-col justify-center items-center lg:items-start lg:col-span-1">
                    <h3 class="text-3xl mb-3 text-white">Let's get in touch</h3>
                    <p class="mb-4 text-zinc-300 text-base">We're open for any suggestion or just to have a chat</p>
                    <div class="flex w-full mb-4">
                        <div class="flex items-center justify-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="pl-3">
                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="flex items-center justify-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="pl-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>
                    <div class="flex w-full mb-4">
                        <div class="flex items-center justify-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="pl-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                    </div>
                    <div class="flex w-full">
                        <div class="flex items-center justify-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="pl-3">
                            <p><span>Website</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-white p-5 flex-grow">
                    <h3 class="mb-4">Get in touch</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4 text-green-400 font-semibold">Sua mensagem foi enviada com sucesso!</div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label class="label" for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-span-2">
                                <label class="label" for="subject">Subject</label>
                                <input type="text" class="w-full form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-span-2">
                                <label class="label" for="message">Message</label>
                                <textarea name="message" class="w-full form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-span-2">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                                <div class="submitting"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>        

    </div>
</section>