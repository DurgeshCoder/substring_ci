<section id="testimonies" class="testimonies mt-16">
    <div class="container  mx-auto px-4 xl:px-28 aos-init aos-animate" data-aos="fade-up">
        <header class="section-header text-center mb-8">
            <h2 class="text-xl font-bold text-blue-600 dark:text-blue-50 ">TESTIMONIES</h2>
            <p class="text-blue-900 font-bold text-4xl my-3 dark:text-blue-50">What students and clients are saying about
                us</p>
        </header>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper "  virtual="true">


                <?php


                /**
                 *
                 * @type  $testimonials
                 *
                 *
                 */

                foreach ($testimonials as $value) {


                    ?>


                    <div class="swiper-slide  h-[644px] w-[400px] ">
                        <div class="block rounded-lg bg-white shadow-lg dark:bg-gray-800 h-[644px]">
                            <div class="relative overflow-hidden bg-cover bg-no-repeat mt-5 mx-auto p-4">
                                <ul class="text-center p-2">
                                    <i class="fa-solid fa-star fa-lg" style="color: #cec01c;"></i>
                                    <i class="fa-solid fa-star fa-lg" style="color: #cec01c;"></i>
                                    <i class="fa-solid fa-star fa-lg" style="color: #cec01c;"></i>
                                    <i class="fa-solid fa-star fa-lg" style="color: #cec01c;"></i>
                                    <i class="fa-solid fa-star fa-lg" style="color: #cec01c;"></i>
                                </ul>
                                <p class="mb-2 w-[280px] md:w-[320px] mx-auto text-neutral-600 dark:text-neutral-200 text-center">


                                    <?= $value['content'] ?>

                                </p>
                            </div>

                            <div class="p-2 text-center h-48 w-48 mx-auto">
                                <img class="rounded-full object-cover w-36 h-36 mx-auto  "
                                     src=" <?= base_url('static/img/testimonials/' . $value['picture_url']) ?>  "
                                     alt=""/>
                                <div>
                                    <h5 class="testimonies_name  text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                        <?= $value['name'] ?>
                                    </h5>
                                    <h4 class="dark:text-blue-50">
                                        <?= $value['position'] ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>


            </div>
            <div class="swiper-pagination top-2"></div>
        </div>
    </div>
</section>


