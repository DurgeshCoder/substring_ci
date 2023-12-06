
<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Live Training Batches on Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->





<!--content of the page -->
<?= $this->section("content"); ?>

<body class="dark:bg-gray-900" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
  

<!-- banner section starts -->
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper1 h-[50vh] w-full">
<div class="parallax-bg absolute left-0 top-0 w-[130%] h-[100%] bg-cover bg-center" style="background-image: url('<?= base_url('images/course_bg.jpg') ?>'); "  data-swiper-parallax="-23%">
</div>
        
    <div class="swiper-wrapper text-center">
      <div class="swiper-slide grid grid-cols-1 md:grid-cols-2 -gap-4 lg:px-44  bg-gradient-to-tr from-indigo-600/90 to-cyan-500/50 transform transition duration-1000 hover:bg-opacity-40">
        <div class="grid place-items-center lg:-mt-32" data-swiper-parallax="-300">
            <div class="text-center px-8 md:text-left md:px-10 lg:mt-20 ">
              <h1 class="text-2xl md:text-6xl font-bold my-0 text-blue-800 text-center animation drop-shadow-2xl shadow-purple-600" data-aos="fade-right" data-aos-duration="1000">Where Algorithms Meet Aspiration</h1>
              <p class="text-sm md:text-lg my-0 font-normal mt-4 text-center animation text-white bg-clip-text text-transparent" data-aos="fade-left" data-aos-duration="1000">Emphasizes the role of algorithms and problem-solving skills in fulfilling one's aspirations and goals.</p>
            </div>
          </div>
        <div class=" grid place-items-center">
            <img src="images/undraw_2.svg" class="h-[150px] md:h-[250px] xl:h-[400px] animatiom" data-aos="flip-right" alt="">
        </div>
       
      </div>
      <div class="swiper-slide grid grid-cols-1 md:grid-cols-2 -gap-4 lg:px-44  bg-gradient-to-tr from-indigo-600/90 to-cyan-500/50  transform transition duration-1000 hover:bg-opacity-40">
        <div class="grid place-items-center lg:-mt-32" data-swiper-parallax="-300">
            <div class="text-center px-8 md:text-left md:px-10 lg:mt-20">
              <h1 class="text-2xl md:text-6xl font-bold my-0  text-purple-900 text-center animation" data-aos="fade-right" data-aos-duration="1000">Data-Driven Dreams, Code-Powered Reality</h1>
              <p class="text-sm md:text-lg my-0 font-normal mt-4 text-center animation text-white bg-clip-text text-transparent" data-aos="fade-left" data-aos-duration="1000">Conveys the idea that the world of data and code can transform dreams into a tangible and achievable reality.</p>
            </div>
          </div>
        <div class=" grid place-items-center">
            <img src="images/undraw_3.svg" class="h-[150px] md:h-[250px] xl:h-[400px] animation" data-aos="flip-left" alt="">
        </div>
       
      </div>
      <div class="swiper-slide grid grid-cols-1 md:grid-cols-2 -gap-4 lg:px-44 bg-gradient-to-tr from-indigo-600/90 to-cyan-500/50 transform transition duration-1000 hover:bg-opacity-40">
        <div class="grid place-items-center lg:-mt-32" data-swiper-parallax="-300">
            <div class="text-center px-8 md:text-left md:px-10  lg:mt-20">
              <h1 class="text-2xl md:text-6xl font-bold my-0 text-gray-700 text-center animation" data-aos="fade-right" data-aos-duration="1000">Smart Learning for Smart Minds.</h1>
              <p class="text-sm md:text-lg my-0 font-normal mt-4 text-center animation text-white bg-clip-text text-transparent" data-aos="fade-left" data-aos-duration="1000">Tailored education for fast learners, harnessing innate intelligence for advanced, stimulating, and innovative learning.</p>
            </div>
          </div>
        <div class=" grid place-items-center">
            <img src="images/undraw_1.svg" class="h-[150px] md:h-[250px] xl:h-[400px] animation" data-aos="flip-right" alt="">
        </div>
       
      </div>
      
    </div>
    <div class="swiper-button-next md:mr-32"></div>
    <div class="swiper-button-prev md:ml-32"></div>
    <div class="swiper-pagination"></div>
   
    
  </div>
    
    



<!-- baanner section ends -->


<!-- search box starts -->


<section class="search py-10 xl:py-16" id="search">
    <div class=" px-4 xl:px-32 mx-auto"> 
        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative max-w-4xl mx-auto">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block shadow-lg w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-900  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-700 dark:focus:border-blue-500" placeholder="Search Courses . . ." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-8 py-2  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>
</section>


<!-- search box ends -->


<!-- courses section starts -->
<section class="courses py-4" id="courses">

 
    <div class="container px-4 xl:px-16 mx-auto">
        <div class="grid-cols-1 sm:grid md:grid-cols-3 gap-8 ">
        <?php foreach($courses as $course): ?>
            <div
              class="mx-3 mt-6 flex flex-col rounded-xl bg-black bg-opacity-10 hover:bg-opacity-60 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 transform duration-500 hover:-translate-y-2 cursor-pointer border-b-[7px] border-blue-700 group">
              <div class="overflow-hidden bg-cover bg-no-repeat">
              <img class="rounded-t-lg object-fill hover:scale-[1.08] transition duration-700 ease-in-out h-64 w-full " src="<?= file_exists(FCPATH . "cover_images/" . $course['cover_image']) ? base_url("cover_images/" . $course['cover_image']) : base_url("cover_images/church.jpg") ?>" alt="Course Image" />

           </div>
              <div class="p-6 transform duration-500 hover:-translate-y-2 cursor-pointer">
                <h5
                  class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 group-hover:text-white">
                  <?=$course['name']?>
                </h5>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 group-hover:text-white">
                 <?=$course['short_description']?>
                </p>
                <div class="w-16 h-2 bg-gradient-to-r from-purple-600 to-blue-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300 mt-0 ">
                </div>
                <div class="grid place-items-center">
                  <a href="<?php echo base_url('training/'.$course['slug']) ?>">
                  <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 ">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group- hover:bg-opacity-0">
                            Join Training
                        </span>
                    </button></a>
                    
                  </div>
              </div>
            </div>
            <?php endforeach ?>
    

            

    
          </div>
          
    </div>
    
</section>
<!-- courses section ends -->










<!-- footer section starts -->
<!-- <footer id="footer" class="footer bg-gray-800 py-16">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container mx-auto px-4">
        <div class="text-center">
          <h4 class="text-white text-2xl font-semibold mb-4">Our Newsletter</h4>
          <p class="text-gray-400 mb-8">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        </div>
        <div class="flex justify-center">
          <form action="#" method="post" class="flex">
            <div class="p-[1px] bg-white rounded-sm flex">
            <input type="email" name="email" class="py-2 px-4 m-1 h-auto w-auto border-none rounded-sm md:w-[500px] md:h-[55px]focus:outline-none focus:ring focus:border-blue-300">
            <input type="submit" value="Subscribe" class="px-2 md:py-4 md:px-12 bg-blue-900 text-white cursor-pointer hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 rounded-sm">
          </div>
          </form>
        </div>
      </div>
    </div>
  <hr class="my-12">
  
    
  <hr class="my-12">
  
    <div class="container mx-auto px-4">
      <div class="text-center text-gray-400">
        © Copyright <strong><span class="text-white">Substring Technologies </span></strong>. All Rights Reserved
      </div>
      <div class="text-center mt-2">
        < All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        <!-- Designed by <a href="" class="text-blue-500 hover:underline">SubstringMade</a> -->
      </div>
    </div>
  </footer> 
<!-- footer section ends -->













    
</body>


<?= $this->endSection(); ?>
<!--send of the content section-->

