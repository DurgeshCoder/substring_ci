<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
View Course
<?= $this-> endSection()?>
<?= $this-> section("content" )?>


<section id="add_coureses" class=' mx-8 md:mx-16 sm:ml-64 my-16 '>
 
 <div class='sm:ml-64 bg-white p-2 md:p-6 rounded-lg shadow-lg dark:bg-gray-800'>

    <div class="w-full text-blue-700 ">
        <div class="p-4 flex flex-row items-center justify-between">
            <h1 class="ml-2 text-4xl font-semibold  focus:outline-none focus:shadow-outline dark:text-gray-100"> <?= $course['name'] ?></h1>
        </div>
    </div>
    <!-- End of Navbar -->

    <div class="container mx-auto mt-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-blue-700 dark:bg-gray-700 dark:border-gray-900" >
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1 dark:text-gray-100">Course ID: <?= $course['course_id'] ?></h1>
                    
                    <p class="text-gray-900 dark:text-gray-100">
                     <?= $course['short_description'] ?>
                     </p>
                    
                    <ul
                        class="bg-gray-100 text-gray-600  hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm dark:text-gray-100 dark:bg-gray-800">
                        <li class="flex items-center py-3">
                            <span>Admission Status</span>
                            <span class="ml-auto"><span
                                    class="bg-blue-700 py-1 px-2 rounded text-white text-sm dark:text-gray-100 dark:bg-gray-700"><?= $course['admission'] ?></span></span>
                        </li>
                        <li class="flex items-center py-3 dark:text-gray-100">
                            <span>Number of Admissions</span>
                            <span class="ml-auto"><span
                                    class="bg-blue-700 py-1 px-2 rounded text-white text-sm dark:text-gray-100 dark:bg-gray-700"><?= $course['admission_open'] ?></span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Start Date</span>
                            <span class="ml-auto"><?= $course['start_date'] ?></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Duration</span>
                            <span class="ml-auto"><?= $course['duration'] ?><span class="ml-2">Months</span></span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 md:mx-2">
                <div class="bg-white p-3 shadow-sm rounded-sm dark:bg-gray-700"  >
                    

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Grid wrapper -->
                       <div class="grid grid-cols-2 font-semibold gap-2">

                        <div>
                            <h5 class="text-xl text-blue-700 dark:text-gray-100">Fee:</h5>
                         </div>

                         <div>
                             <h5 class="text-xl tracking-wide dark:text-gray-100">Rs.<?= $course['fee'] ?></h5>
                         </div>

                          <div>
                            <h5 class="text-xl text-blue-700 dark:text-gray-100">Discounted Fee:</h5>
                        </div>

                        <div>
                          <h5 class="text-xl tracking-wide dark:text-gray-100">Rs.<?= $course['discounted_fee'] ?></h5>
                         </div>

                         <div>
                               <h5 class="text-xl text-blue-700 dark:text-gray-100">Instructor:</h5>
                        </div>

                         <div >
                              <h5 class="text-xl tracking-wide dark:text-gray-100"><?= $course['instructor'] ?></h5>
                         </div>

                             <div>
                         <h5 class="text-xl text-blue-700 dark:text-gray-100">Mode:</h5>
                               </div>

                         <div>
                            <h5 class="text-xl tracking-wide dark:text-gray-100"><?= $course['mode'] ?></h5>
                         </div>

                         <div>
                             <h5 class="text-xl text-blue-700 dark:text-gray-100">Slug:</h5>
                        </div>

                        <div>
                              <h5 class="text-xl tracking-wide dark:text-gray-100"><?= $course['slug'] ?></h5>
                          </div>

                         <div >
                               <h5 class="text-xl text-blue-700 dark:text-gray-100">Rating</h5>
                        </div>
      
                        <div class="font-bold" >
                              <h5 class="text-xl tracking-wide dark:text-gray-100"><?= $course['rating'] ?></h5>
                         </div>
                  </div>
<!-- Grid wrapper -->
                       
                        <div>
                            <div class="flex items-center space-x-2 text-2xl font-bold text-gray-900 leading-8 mb-3">
                                <span class="text-blue-700 dark:text-gray-100">
                                    <i class="fa-brands fa-stack-overflow"></i>    
                                </span>
                                <span class="tracking-wide dark:text-gray-100">Course Resourses: </span>
                            </div>
                            <p class="text-gray-900 dark:text-gray-100">
                                <?= $course['course_resourses'] ?>
                            </p>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
    <div class=" font-semibold gap-2 grid grid-cols-1 grid-rows-1 md:grid-cols-12">
      <div class="md:col-start-1 md:col-span-8 bg-white p-3 shadow-sm rounded-sm dark:bg-gray-700 ">
        <div class="flex items-center space-x-2 text-xl font-bold text-gray-900 leading-8">
            <span class="text-blue-700 dark:text-gray-100">
                <i class="fa-solid fa-newspaper"></i>
            </span>
            <span class="text-blue-700 dark:text-gray-100">Full Description</span>
        </div>
        <div class="text-gray-900 dark:text-gray-100">
            <?= $course['long_description'] ?>
        </div>
     </div>

     <div class="md:col-start-9 md:col-span-4 p-3 hover:shadow bg-gray-100 rounded dark:bg-gray-700 mb-4">
        <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
            <span class="text-blue-700 dark:text-gray-100">
                <i class="fa-solid fa-image"></i>
            </span>
            <span class="text-blue-700 dark:text-gray-100">Cover Image</span>
        </div>
        <div class="grid">
            <div class="text-center my-2">
                <img src="<?= base_url("cover_images/".$course['cover_image']) ?>" class="h-80 w-auto hover:scale-[1.02] transition duration-700 ease-in-out" alt=""  onerror="this.onerror=null;this.src="<?= base_url("cover_images/church.jpg") ?>">
            </div> 
          
        </div>
    </div>
    </div>
 </div>

 
 
</section>

<?= $this->endSection()?>