<!--Contact Section-->
<section class="contact" id="contact">
    <div class="container mx-auto" data-aos="fade-up">
        <header class="section-header" >
            <h2>Contact</h2>
            <p>Contact Us</p>
        </header>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3 class="text-lg font-semibold">Address</h3>
                        <p class="mt-2">A108 Adam Street,<br>New York, NY 535022</p>
                    </div>
                    <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3 class="text-lg font-semibold">Call Us</h3>
                        <p class="mt-2">+1 5589 55488 55<br>+1 6678 254445 41</p>
                    </div>
                    <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <h3 class="text-lg font-semibold">Email Us</h3>
                        <p class="mt-2">info@example.com<br>contact@example.com</p>
                    </div>
                    <div class="info-box">
                        <i class="bi bi-clock"></i>
                        <h3 class="text-lg font-semibold">Open Hours</h3>
                        <p class="mt-2">Monday - Friday<br>9:00AM - 05:00PM</p>
                    </div>
                </div>
            </div>

            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="grid grid-cols-1 gap-4">

                        <div>
                            <input type="text" name="name" class="w-full" placeholder="Your Name" required>
                        </div>

                        <div>
                            <input type="email" class="w-full" name="email" placeholder="Your Email" required>
                        </div>

                        <div>
                            <input type="text" class="w-full" name="subject" placeholder="Subject" required>
                        </div>

                        <div>
                            <textarea class="w-full" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit" class="mt-4 btn btn-primary">Send Message</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>


    </div>
</section>