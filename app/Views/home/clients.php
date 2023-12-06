<!--Clients Section-->
<section class="clients mt-16" id="clients">
    <div class="container mx-auto " data-aos="fade-up">
        <header class="section-header text-center">
            <h2 class="text-xl font-bold mb-2 dark:text-blue-50 text-blue-600 uppercase">Brands</h2>
            <p class="text-blue-900 text-4xl  dark:text-blue-50  font-bold mb-8">Top Brands our students working
                with.</p>
        </header>
        <div class="clients-slider clientSwiper">
            <div class="swiper-wrapper ">

                <?php
                /**
                 *
                 * @type  $client_photos
                 */

                foreach ($client_photos as $photo) { ?>
                    <div class="swiper-slide flex justify-center items-center">
                        <img src="<?= strpos($photo['picture_url'], 'https://') === 0 ? $photo['picture_url'] : base_url($photo['picture_url']) ?>"
                             class="img-fluid w-32 h-32 object-contain border rounded-full" alt=""/>
                    </div>
                <?php } ?>
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-2.png" class="img-fluid" alt="">-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-3.png" class="img-fluid" alt="">-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-4.png" class="img-fluid" alt="">-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-5.png" class="img-fluid" alt="">-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-6.png" class="img-fluid" alt="">-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-7.png" class="img-fluid" alt="">-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <img src="static/img/clients/client-8.png" class="img-fluid" alt="">-->
                <!--                </div>-->
            </div>
            <div class="swiper-pagination "></div>
        </div>

    </div>
</section>