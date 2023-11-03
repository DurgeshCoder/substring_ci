<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Courses offered by Substring Technologies
<?= $this->endSection() ?>








<?= $this->section("content"); ?>

<body class="dark:bg-gray-900" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
 <!-- header starts    -->
       

        <section class="bg-[url('<?= base_url('images/course_bg.jpg') ?>')] bg-fixed bg-cover bg-center  ">
        <div class="relative bg-gradient-to-tr from-indigo-600/90 to-cyan-500/50 h-[80vh] -mt-[22px] mb-80 lg:mb-12">
            <svg class="absolute inset-x-0 bottom-0 text-white -mb-1" viewBox="0 0 1160 163">
            <path
                fill="currentColor"
                d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
            ></path>
            </svg>
            <div class="relative px-4  mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-between">
                <div class="lg:col-start-1 lg:col-end-6 mt-8 md:mt-32 md:ml-8">
                <h2 class="course_heading max-w-4xl mb-2 text-4xl font-bold tracking-tight text-white sm:text-6xl sm:leading-none text-left  " data-aos="fade-right">
                 <span class='max-w-4xl text-purple-700  font-semibold text-3xl underline decoration-purple-700'> Get in and join the Training</span> <br class="hidden md:block" />
                 <?=$course['name'] ?>
                </h2>
                <p class="course_discription max-w-2xl text-base text-gray-200 md:text-2xl " data-aos="fade-left">
                    
                   <?=$course['short_description']?>
                </p>
                <div>
                    <p class="text-blue-900 text-2xl font-bold mb-1  dark:text-white "data-aos="fade-right" >Language :- Hindi</p>
                    <h1 class="text-blue-900 font-bold text-2xl dark:text-white "data-aos="fade-right">Rating :-
                                <?php
                                $rating = $course['rating'];
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<i class="fa-solid fa-star fa-sm  align-baseline " data-aos="flip-right" style="color: #e6df19;"></i>';
                                    } else {
                                        echo '<i class="fa-solid fa-star fa-sm  align-baseline " data-aos="flip-right" style="color: #e6df19;"></i>';
                                    }
                                }
                                ?>
                    </h1>
                    
                </div>
                <a href="#start-course">
                    <button class="bg-purple-500 hover:bg-purple-700 text-2xl text-white font-semibold py-1 my-4 w-56 border-b-4 border-purple-700 hover:border-purple-900 rounded " data-aos="fade-up">
                      Join Training<i class="fa-solid fa-arrow-right fa-beat-fade fa-sm ml-3"></i>
                      </button>
                  </a>
                
                </div>
                <div class=" lg:col-start-8 lg:col-end-12 pb-10 mx-auto" data-aos="fade-left">
                <div
                class="block w-[21.5rem] md:w-[30rem] rounded-lg p-2 md:p-8 bg-white  shadow-xl mt-12">
                <div class="relative overflow-hidden bg-cover bg-no-repeat ">
                <img class="rounded-xl object-contain h-80 w-full hover:scale-[1.02] transition duration-700 ease-in-out" src="<?= file_exists(FCPATH . "cover_images/".$course['cover_image']) ? base_url("cover_images/".$course['cover_image']) : base_url("cover_images/default.png") ?>" alt="Course Image" />
                    
                </div>
                
                <div class="mx-4 ">
                    <h1 class="text-3xl font-bold text-blue-900"> Features of this Training</h1>
                    <p class="text-blue-900 text-xl font-semibold mt-3"><i class="fa-solid fa-pen-nib fa-lg text-blue-900 px-3 my-4"></i>Hands-on Projects</p>
                    <p class="text-blue-900 text-xl font-semibold"><i class="fa-solid fa-pen-nib fa-lg text-blue-900 px-3 my-4"></i>Expert Instructors</p>
                    <p class="text-blue-900 text-xl font-semibold"><i class="fa-solid fa-pen-nib fa-lg text-blue-900 px-3 my-4"></i>Collaborative Learning</p>
                    <p class="text-blue-900 text-xl font-semibold"><i class="fa-solid fa-pen-nib fa-lg text-blue-900 px-3 my-4"></i>Interactive Workshops</p>
                    <p class="text-blue-900 text-xl font-semibold"><i class="fa-solid fa-pen-nib fa-lg text-blue-900 px-3 my-4 mb-16"></i>Certificate of Completion</p>
                </div>
                
                </div>
                </div>
            </div>
            </div>
            
            
        </div>
        </section>



        <!-- start course section  -->
        <!--Tabs navigation-->
        <section class="start_course py-8" id="start_course">
            <div class="container  mx-auto px-4 xl:px-32">
                <!--Tabs navigation-->
                <ul
                  class="mb-4 grid grid-cols-1 md:grid-cols-3 text-center list-none gap-4 px-8 justify-center bg-blue-200 border-2 border-blue-900 rounded-full mt-72 sm:mt-36 md:mt-96 lg:mt-16 xl:mt-0"
                  id="tabs-tab3"
                  role="tablist"
                  data-te-nav-ref>
                  <li role="presentation">
                    <a
                      href="#tabs-home3"
                      class="mt-6 md:my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2  pb-1 md:pb-3.5 pt-1 md:pt-4 text-lg font-bold uppercase leading-tight text-blue-900 transform tranisition duration-500 hover:isolate  hover:bg-neutral-100 data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-gray-900 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400 rounded-full dark:hover:bg-white"
                      id="tabs-home-tab3"
                        data-te-toggle="pill"
                        data-te-target="#tabs-home3"
                        data-te-nav-active
                        role="tab"
                        aria-controls="tabs-home3"
                        aria-selected="true"
                      >Overviews</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tabs-profile3"
                      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 pb-1 md:pb-3.5 pt-1 md:pt-4 text-lg font-bold uppercase leading-tight text-blue-900 hover:isolate transform tranisition duration-500 hover:bg-neutral-100 data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-gray-900 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400 rounded-full dark:hover:bg-white"
                      id="tabs-profile-tab3"
                        data-te-toggle="pill"
                        data-te-target="#tabs-profile3"
                       
                        role="tab"
                        aria-controls="tabs-profile3"
                        aria-selected="false"
                      >Course Content</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tabs-messages3"
                      class="mb-6 md:my-2 block border-x-0 border-b-2  border-t-0 border-transparent px-2  pb-1 md:pb-3.5 pt-1 md:pt-4 text-lg font-bold uppercase leading-tight text-blue-900 transform tranisition duration-500 hover:isolate  hover:bg-neutral-100 data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-gray-900 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400 rounded-full dark:hover:bg-white"
                      id="tabs-messages-tab3"
                        data-te-toggle="pill"
                        data-te-target="#tabs-messages3"
                        role="tab"
                        aria-controls="tabs-messages3"
                        aria-selected="false"
                      >Resourses</a
                    >
                  </li>
                  </ul>
                
                  

        <!--Tabs content-->
         <div>
            <div
                class="hidden mt-16 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="tabs-home3"
                data-te-tab-active
                role="tabpanel"
                aria-labelledby="tabs-home-tab3">
                <div class=" p-6 bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="text-center text-3xl font-bold text-blue-900 underline decoration-2  
                    mb-4  dark:text-white">Description Of The Course</h1>
                    <p class="text-xl text-justify dark:text-white "><?=$course['long_description']?></p>
                </div>
                <div>
                    <h1 class="text-center text-3xl font-bold text-blue-900 underline decoration-2  
                    my-4 mt-16 dark:text-white">Key Highlights Off Our Course</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 mt-16 ">

                    <div class="aos-init aos-animate text-center " data-aos="fade-up" data-aos-delay="200">
                        <div class="box bg-gray-200 bg-opacity-40 rounded-lg p-6 shadow-md  hover:shadow-2xl duration-1000 dark:bg-gray-800  border-b-4 border-blue-700">
                        <img src="<?= base_url("images/undraw_video.svg") ?>" class="mx-auto mb-4 w-40 h-40 py-4 transform-gpu hover:scale-90 transition-transform duration-1000 ease-in-out" alt="">
                        <h3 class="text-3xl font-bold text-blue-900 py-1 dark:text-blue-50">Live Lectures</h3>
                        <p class="text-gray-600 mt-2 text-xl dark:text-blue-50">Each live class contain source code if they have</p>
                        </div>
                    </div>

                    <div class="mt-4 md:mt-0 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="box bg-gray-200 bg-opacity-40 p-6 rounded-lg shadow-md hover:shadow-2xl duration-1000 dark:bg-gray-800 border-b-4 border-blue-700">
                        <img src="<?= base_url("images/enrollments.svg") ?>" class="mx-auto mb-4 w-40 h-40 py-4 transform-gpu hover:scale-90 transition-transform duration-1000 ease-in-out" alt="">
                        <h3 class="text-3xl font-bold text-blue-900 py-1 dark:text-blue-50"><?=$course['admission_open']?>+ Enrollments</h3>
                        <p class="text-gray-600 mt-2 text-xl dark:text-blue-50">Almost <?=$course['admission_open']?>+ user already enrolled for this course</p>
                        </div>
                    </div>

                    <div class="mt-4 md:mt-0 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="600">
                        <div class="box bg-gray-200 bg-opacity-40 p-6 rounded-lg shadow-md hover:shadow-2xl duration-1000 dark:bg-gray-800  border-b-4 border-blue-700">
                        <img src="<?= base_url("images/ratting.svg") ?>" class="mx-auto mb-4 w-40 h-40 py-4 transform-gpu hover:scale-90 transition-transform duration-1000 ease-in-out" alt="">
                        <h3 class="text-3xl font-bold text-blue-900 py-1 dark:text-blue-50"><?=$course['rating']?>.0/5.0 Rating</h3>
                        <p class="text-gray-600 mt-2 text-xl dark:text-blue-50">Rating, All students likes this course.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <div
            class="conatiner hidden opacity-0 mt-16 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-profile3"
            role="tabpanel"
                
            aria-labelledby="tabs-profile-tab3 ">
             <!-- Loop through topics and their associated subtopics -->
  
          <?php foreach ($newData[0]['topics'] as $topic): ?>
          <div id="start-course" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-<?php echo $topic['topic_id']; ?>">
                <button type="button" class="flex items-center bg-blue-400 justify-between w-full p-4 mt-3 text-lg font-semibold text-left text-blue-900 border border-b-1 border-gray-800 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-900 hover:bg-blue-300 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-<?php echo $topic['topic_id']; ?>" aria-expanded="true" aria-controls="accordion-collapse-body-<?php echo $topic['topic_id']; ?>">
                
                <span class="topic_name" id="topic_name" ><?php echo $topic['topic']; ?></span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
        
            <div id="accordion-collapse-body-<?php echo $topic['topic_id']; ?>" class="hidden" aria-labelledby="accordion-collapse-heading-<?php echo $topic['topic_id']; ?>">
                <div class="p-5 border border-b-1 rounded-xl mt-2 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Sub  Topics</p>
            
            
                        <!-- Nested accordion -->
            
                        
                        <?php foreach ($topic['subtopicsArray'] as $subtopic): ?>
                            <div id="accordion-nested-collapse" data-accordion="collapse">
                                <h2 id="accordion-nested-collapse-heading-<?php echo $subtopic['subtopic_id']; ?>">
                                <button type="button" class="flex items-center justify-between w-full p-2 mb-1  rounded-xl font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-nested-collapse-body-<?php echo $subtopic['subtopic_id']; ?>" aria-expanded="false" aria-controls="accordion-nested-collapse-body-<?php echo $subtopic['subtopic_id']; ?>">
                                    <span><?php echo $subtopic['subtopic_name']; ?></span>
                                </button>
                                </h2>
                                
                            </div>
                        <?php endforeach; ?>  
            
                
            
                        <!-- End: Nested accordion -->
                </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>





        <!-- resourses section starts -->



        <div
        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-messages3"
        role="tabpanel"
        aria-labelledby="tabs-profile-tab3">
        <div class="bg-gray-200 bg-opacity-40 shadow-lg rounded p-4 pb-16 mt-16 border dark:bg-gray-800 dark:border-gray-700">
            <h2 class="text-3xl text-blue-900 font-bold mb-2 underline decoration-2 text-center dark:text-white">Resourses We Have</h2>
            <div>
            <h1 class="text-2xl text-blue-900 font-semibold ml-4 my-2 underline decoration-2 dark:text-white">User Guides and Tutorials:</h1>
            <ul class="list-disc text-base text-black ml-8 dark:text-white">
                <li>User manuals, installation guides, and configuration guides.</li>
                <li>Video tutorials demonstrating key features and tasks</li>
                <li>Written tutorials with step-by-step instructions for various tasks</li>
            </ul>
            </div>

            <div>
            <h1 class="text-2xl text-blue-900 font-semibold ml-4 my-2 underline decoration-2 dark:text-white">Support and Assistance:</h1>
            <ul class="list-disc text-base text-black ml-8 dark:text-white">
                <li>Contact information for customer support and technical assistance.</li>
                <li>Links to community forums or online support resources.</li>
                <li>Troubleshooting guides for common issues.</li>
            </ul>
            </div>

            <div>
            <h1 class="text-2xl text-blue-900 font-semibold ml-4 my-2 underline decoration-2 dark:text-white">Additional Resources:</h1>
            <ul class="list-disc text-base text-black ml-8 dark:text-white">
                <li><?=$course['course_resourses']?></li>
                <li>Case studies showcasing real-world examples of the software's benefits.</li>
                <li>Links to relevant blog posts, articles, and whitepapers.</li>
            </ul>
            </div>

        <!-- note section starts -->
            <div class="flex items-center my-8">
            <hr class="flex-grow border-2 border-gray-300">
            <span class="px-3 text-2xl font-semibold text-gray-500 uppercase mb-1">Note</span>
            <hr class="flex-grow  border-2 border-gray-300">
            </div>

            <div class="max-w-md overflow-hidden">
            <p class="text-lg font-medium">For any query send message to telegram username:<strong class="block">@help889</strong></p>
            <p class="text-lg font-medium">You can also send email : </p>
            <span class="font-bold text-lg">support@learncodewithdurgesh.com</span>
            </div>

        </div>
        

        
        
        
        </div>
        </div>
            </div>
        </section>
        <!-- start course section ends -->

        <br><br><br><br><br><br>




























            <script>
                AOS.init();
            </script>
            <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>   
            <script src="https://cdn.tailwindcss.com/3.3.0"></script> 
            <script>
                import {
        Tab,
        initTE,
        } from "tw-elements";

        initTE({ Tab });
            </script>
</body>
<?= $this->endSection(); ?>