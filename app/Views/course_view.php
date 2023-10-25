<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Courses offered by Substring Technologies
<?= $this->endSection() ?>


<?= $this->section("content"); ?>

<body class="dark:bg-gray-900" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
 <!-- header starts    -->
       

        <section class="bg-[url('images/tra_bg3.jpg')] bg-fixed bg-cover bg-center ">
        <div class="relative bg-opacity-75 bg-blue-700 h-[80vh]">
            <svg class="absolute inset-x-0 bottom-0 text-white -mb-1" viewBox="0 0 1160 163">
            <path
                fill="currentColor"
                d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
            ></path>
            </svg>
            <div class="relative px-4  mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-between">
                <div class="md:col-start-1 md:col-end-6 mt-12">
                <h2 class="course_heading max-w-xl mb-2 text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none text-left -ml-4">
                    Let's Get Start <br class="hidden md:block" />

                    
                    <?=$course['name'] ?>
                </h2>
                <p class="course_discription max-w-xl mb-4 text-base text-gray-200 md:text-xl">
                    
                   <?=$course['short_description']?>
                </p>
                <div>
                    <p class="text-blue-900 text-2xl font-bold mb-1  dark:text-white" >Language :- Hindi</p>
                    <h1 class="text-blue-900 font-bold text-2xl dark:text-white">Rating :-
                    <i class="fa-solid fa-star fa-sm  align-baseline " style="color: #e6df19;"></i>
                    <i class="fa-solid fa-star fa-sm  align-baseline " style="color: #e6df19;"></i>
                    <i class="fa-solid fa-star fa-sm  align-baseline " style="color: #e6df19;"></i>
                    <i class="fa-solid fa-star fa-sm  align-baseline " style="color: #e6df19;"></i>
                    <i class="fa-solid fa-star fa-sm  align-baseline " style="color: #e6df19;"></i>
                    </h1>
                    
                </div>
                
                </div>
                <div class=" md:col-start-8 md:col-end-12 pb-10">
                <div
                class="block w-[21.5rem] md:w-[30rem] rounded-lg bg-white  dark:bg-white shadow-xl">
                <div class="relative overflow-hidden bg-cover bg-no-repeat mt-12">
                <img class="rounded-t-lg h-80 w-full hover:scale-[1.02] transition duration-700 ease-in-out" src="<?= file_exists(FCPATH . "cover_images/".$course['cover_image']) ? base_url("cover_images/".$course['cover_image']) : base_url("cover_images/default.png") ?>" alt="Course Image" />
                    
                </div>
                <div class="p-6 grid place-items-center">
                    <button class="bg-blue-700 hover:bg-blue-900 text-2xl text-white font-semibold py-2 px-8 w-72 border-b-4 border-blue-700 hover:border-blue-500 rounded-2xl mb-2 ">
                    Start Learning
                    </button>
                    <button class=" mt-2 bg-blue-700 hover:bg-blue-900 text-lg text-white font-medium py-1 px-1 w-52 border-b-4 border-blue-700 hover:border-blue-500 rounded-2xl ">
                    Download Source Code
                    </button>
                    
                </div>
                <div class="mx-4 mt-3">
                    <h1 class="text-3xl font-bold text-blue-900"> Features of this Course</h1>
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


        <!-- banner section starts -->
        <!-- <div class="relative">
            <img src="images/tra_bg3.jpg" class="absolute inset-0 object-cover w-full h-[80vh]" alt="" />
            <div class="relative bg-opacity-75 bg-blue-700 h-[80vh]">
            <svg class="absolute inset-x-0 bottom-0 text-white -mb-1" viewBox="0 0 1160 163">
                <path
                fill="currentColor"
                d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
                ></path>
            </svg>
            
            </div>
            
        </div> -->
        <!-- banner section ends -->
        
        


        <!-- start course section  -->
        <!--Tabs navigation-->
        <section class="start_course py-32 mx-4" id="start_course">
            <div class="container  mx-auto xl:px-32">
                <!--Tabs navigation-->
                <ul
class="mb-4 flex list-none flex-row flex-wrap gap-4 pl-0 justify-center bg-blue-200 border-2 border-blue-900 rounded-full mt-[650px] sm:mt-[430px] lg:mt-40"
id="tabs-tab3"
role="tablist"
data-te-nav-ref>
<li role="presentation">
  <a
    href="#tabs-home3"
    class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 md:px-32 pb-1 md:pb-3.5 pt-1 md:pt-4 text-lg font-bold uppercase leading-tight text-blue-900 transform tranisition duration-500 hover:isolate  hover:bg-neutral-100 data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-gray-900 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400 rounded-full dark:hover:bg-white"
    id="tabs-home-tab3"
    data-te-toggle="pill"
    data-te-target="#tabs-home3"
    
    role="tab"
    aria-controls="tabs-home3"
    aria-selected="true"
    >Overviews</a
  >
</li>
<li role="presentation">
  <a
    href="#tabs-profile3"
    class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 md:px-32 pb-1 md:pb-3.5 pt-1 md:pt-4 text-lg font-bold uppercase leading-tight text-blue-900 hover:isolate transform tranisition duration-500 hover:bg-neutral-100 data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-gray-900 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400 rounded-full dark:hover:bg-white"
    id="tabs-profile-tab3"
    data-te-toggle="pill"
    data-te-target="#tabs-profile3"
    data-te-nav-active
    role="tab"
    aria-controls="tabs-profile3"
    aria-selected="false"
    >Course Content</a
  >
</li>
<li role="presentation">
  <a
    href="#tabs-messages3"
    class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-2 md:px-32 pb-1 md:pb-3.5 pt-1 md:pt-4 text-lg font-bold uppercase leading-tight text-blue-900 transform tranisition duration-500 hover:isolate  hover:bg-neutral-100 data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-gray-900 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400 rounded-full dark:hover:bg-white"
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
        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-home3"
        role="tabpanel"
        
        aria-labelledby="tabs-home-tab3">
        <div>
            <h1 class="text-center text-3xl font-bold text-blue-900 underline decoration-2  
            my-4 mt-8">Description Of The Course</h1>
            <p class="text-xl text-justify dark:text-white "><?=$course['long_description']?></p>
        </div>
        <div>
            <h1 class="text-center text-3xl font-bold text-blue-900 underline decoration-2  
            my-4 mt-16">Key Highlights Off Our Course</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 mt-16 ">

            <div class="aos-init aos-animate text-center " data-aos="fade-up" data-aos-delay="200">
                <div class="box bg-gray-200 bg-opacity-40 rounded-lg p-6 shadow-md  hover:shadow-2xl duration-1000 dark:bg-gray-800  border-b-4 border-blue-700">
                <img src="images/undraw_video.svg" class="mx-auto mb-4 w-56 h-56 py-4 transform-gpu hover:scale-90 transition-transform duration-1000 ease-in-out" alt="">
                <h3 class="text-3xl font-bold text-blue-900 py-1 dark:text-blue-50">40 + Videos</h3>
                <p class="text-gray-600 mt-2 text-xl dark:text-blue-50">Each video contain source code if they have</p>
                </div>
            </div>

            <div class="mt-4 md:mt-0 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="box bg-gray-200 bg-opacity-40 p-6 rounded-lg shadow-md hover:shadow-2xl duration-1000 dark:bg-gray-800 border-b-4 border-blue-700">
                <img src="images/enrollments.svg" class="mx-auto mb-4 w-56 h-56 py-4 transform-gpu hover:scale-90 transition-transform duration-1000 ease-in-out" alt="">
                <h3 class="text-3xl font-bold text-blue-900 py-1 dark:text-blue-50">1000+ Enrollments</h3>
                <p class="text-gray-600 mt-2 text-xl dark:text-blue-50">Almost 1000+ user already enrolled for this course</p>
                </div>
            </div>

            <div class="mt-4 md:mt-0 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="box bg-gray-200 bg-opacity-40 p-6 rounded-lg shadow-md hover:shadow-2xl duration-1000 dark:bg-gray-800  border-b-4 border-blue-700">
                <img src="images/ratting.svg" class="mx-auto mb-4 w-56 h-56 py-4 transform-gpu hover:scale-90 transition-transform duration-1000 ease-in-out" alt="">
                <h3 class="text-3xl font-bold text-blue-900 py-1 dark:text-blue-50">5.0/5.0 Rating</h3>
                <p class="text-gray-600 mt-2 text-xl dark:text-blue-50">Rating, All students likes this course.</p>
                </div>
            </div>

            </div>
        </div>
        </div>




        <div
        class="conatiner hidden opacity-100 mt-16 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-profile3"
        role="tabpanel"
        data-te-tab-active
        aria-labelledby="tabs-profile-tab3 ">


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>

        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>

        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>

        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>

        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>


        <div  class="bg-blue-400 w-full rounded-lg p-3 flex flex-col lg:flex-row justify-between mb-4">
            <div class="flex flex-row">
            <h1 class="font-semibold text-black text-base lg:text-xl my-auto"><i class="fa-brands fa-youtube fa-xl mx-4 text-blue-900"></i>1. Course Overview | Complete Python Tutorial in Hindi | Python Tutorial</h1>
            </div>
            <a class="flex flex-row justify-center mt-2 lg:mt-0" href="">
            <button class="bg-blue-900 hover:bg-blue-700 transition-all ease-in-out rounded-lg py-3 text-center text-md font-semibold text-white lg:text-xl w-72">Watch Video</button>
            </a>
        </div>

        
            
        </div>

        <!-- course content section ends -->

        <!-- resourses section starts -->



        <div
        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-messages3"
        role="tabpanel"
        aria-labelledby="tabs-profile-tab3">
        <div class="bg-gray-200 bg-opacity-40 shadow-lg rounded p-4 pb-16 mt-16">
            <h2 class="text-3xl text-blue-900 font-bold mb-2 underline decoration-2">Resourses We Have</h2>
            <div>
            <h1 class="text-2xl text-blue-900 font-semibold ml-4 my-2 underline decoration-2">User Guides and Tutorials:</h1>
            <ul class="list-disc text-lg text-black ml-8">
                <li>User manuals, installation guides, and configuration guides.</li>
                <li>Video tutorials demonstrating key features and tasks</li>
                <li>Written tutorials with step-by-step instructions for various tasks</li>
            </ul>
            </div>

            <div>
            <h1 class="text-2xl text-blue-900 font-semibold ml-4 my-2 underline decoration-2">Support and Assistance:</h1>
            <ul class="list-disc text-lg text-black ml-8">
                <li>Contact information for customer support and technical assistance.</li>
                <li>Links to community forums or online support resources.</li>
                <li>Troubleshooting guides for common issues.</li>
            </ul>
            </div>

            <div>
            <h1 class="text-2xl text-blue-900 font-semibold ml-4 my-2 underline decoration-2">Additional Resources:</h1>
            <ul class="list-disc text-lg text-black ml-8">
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