<section id="team" class="team py-10">

    <div class="container mx-auto px-4 xl:px-32 aos-init aos-animate" data-aos="fade-up">

        <header class="section-header text-center mb-8">
            <h2 class="text-xl font-bold text-blue-600 dark:text-blue-50 ">TEAM</h2>
            <p class="text-blue-900 font-bold text-4xl my-3 dark:text-blue-50">Our Hardworking Team</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">


            <?php
            /**
             *
             * @type $teams
             *
             */
            foreach ($teams as $team) { ?>
                <!-- Team Member 1 -->
                <div class="flex flex-col items-center justify-center bg-white rounded shadow-lg hover:scale-110 transition-transform duration-300 ease-in-out dark:bg-gray-800">
                    <div class="member-img  h-[300px]">
                        <img src=" <?= base_url($team['picture_url']) ?> " class="h-full object-contain w-full rounded"
                             alt="">

                    </div>
                    <div class="member-info  text-center px-2 pt-4 mt-2 dark:text-blue-50">
                        <h4 class="font-bold text-2xl text-blue-900 dark:text-blue-50">
                            <?= $team['name'] ?>
                        </h4>
                        <span class="text-gray-600 mt-2 text-lg dark:text-blue-50">
                            <?= $team['position'] ?>
                        </span>
                        <p class="text-sm mt-2 pb-6">

                            <?= $team['about'] ?>

                        </p>
                    </div>
                    <div class="social  py-4">

                        <a href="<?= strpos($team['facebook_url'], 'https://') === 0 ? $team['facebook_url'] : base_url($team['facebook_url']) ?>"
                           class="mr-2"><i
                                    class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href="<?= strpos($team['instagram_url'], 'https://') === 0 ? $team['instagram_url'] : base_url($team['instagram_url']) ?>"
                           class="mr-2"><i
                                    class="fa-brands fa-square-instagram fa-xl"></i></a>
                        <a href="<?= strpos($team['linkedin_url'], 'https://') === 0 ? $team['linkedin_url'] : base_url($team['linkedin_url']) ?>"><i
                                    class="fa-brands fa-linkedin fa-xl"></i></a>
                    </div>
                </div>

                <?php

            } ?>


        </div>

    </div>

</section>