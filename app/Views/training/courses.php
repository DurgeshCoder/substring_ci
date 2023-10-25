<!-- Courses Section Start -->
<section class="courses py-4" id="courses">
    <div class="container px-4 xl:px-16 mx-auto">
        <div class="grid-cols-1 sm:grid md:grid-cols-3 gap-8 ">
            <?php
            /**
             *
             * @type $training_courses
             *
             */
            foreach ($training_courses as $course) { ?>
            <div
                class="mx-3 mt-6 flex flex-col rounded-xl bg-black bg-opacity-10 hover:bg-opacity-60 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 transform duration-500 hover:-translate-y-2 cursor-pointer border-b-[7px] border-blue-700 group">
                <a href="#!">
                    <img
                        class="rounded-t-lg"
                        src="https://tecdn.b-cdn.net/img/new/standard/city/043.webp"
                        alt="Los Angeles Skyscrapers" />
                </a>
                <div class="p-6 transform duration-500 hover:-translate-y-2 cursor-pointer">
                    <h5
                        class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 group-hover:text-white">
                       <?= $course['subject_name'] ?>
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 group-hover:text-white">
                        <?= $course['subject_description'] ?>
                    </p>
                    <div class="w-16 h-2 bg-gradient-to-r from-purple-600 to-blue-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300 mt-0 ">
                    </div>
                    <div class="grid place-items-center">
                        <a href="<?= base_url('/courses') ?>" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 ">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Start Learning
                        </span>
                        </a>
                    </div>
                </div>
            </div>
                <?php

            } ?>



        </div>
    </div>
</section>
<!-- End Section -->