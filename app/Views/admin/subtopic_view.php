
<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
View Subtopic <?= $subtopic['subtopic_name'] ?>
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<section id="add_coureses" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 
 <div class='md:ml-16 bg-white p-2 md:p-6 rounded-lg shadow-lg dark:bg-gray-800'>

    <div class="w-full text-blue-700 ">
        <div class="p-4 flex flex-row items-center justify-between">
            <h1 class="ml-2 text-4xl font-semibold  focus:outline-none focus:shadow-outline dark:text-gray-100"> <?= $subtopic['subtopic_name'] ?></h1>
        </div>
    </div>
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
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
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1 dark:text-gray-100">Sub Topic ID: <?= $subtopic['subtopic_id'] ?></h1>
                    
                    
                    
                   
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 md:mx-2">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm dark:bg-gray-700 ">
                    <div class="flex items-center space-x-2 text-xl font-bold text-gray-900 leading-8">
                        <span class="text-blue-700 dark:text-gray-100">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="text-blue-700 dark:text-gray-100">Full Description</span>
                    </div>
                    <div class="text-gray-900 dark:text-gray-100">
                        <p><?= $subtopic['description'] ?></p>
                        
                    </div>
            
                </div>
                <!-- End of about section -->

               

            
            </div>
        </div>
    </div>
 </div>
 
</section>
<?= $this->endSection()?> 