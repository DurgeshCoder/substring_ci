<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
View Topic <?= $topic['topic_name'] ?>
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<section id="add_coureses" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 
 <div class='md:ml-16 bg-white p-2 md:p-6 rounded-lg shadow-lg dark:bg-gray-800'>

    <div class="w-full text-blue-700 ">
        <div class="p-4 flex flex-row items-center justify-between">
            <h1 class="ml-2 text-4xl font-semibold  focus:outline-none focus:shadow-outline dark:text-gray-100"> <?= $topic['topic_name'] ?></h1>
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
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1 dark:text-gray-100">Topic ID: <?= $topic['topic_id'] ?></h1>
                    
                    
                    
                   
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
                        <p><?= $topic['description'] ?></p>
                        
                    </div>
            
                </div>
                <!-- End of about section -->

               

            
            </div>
        </div>
    </div>
 </div>
 <!-- // const action = document.createElement("td");
                // action.className='px-6 py-4 text-center';

                // const a_view = document.createElement('a');
                // a_view.className='font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2';
                
                // const button_view = document.createElement('button');
                // button_view.className='focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900';
                // const icon_view = document.createElement('i');
                // icon_view.className='fa-solid fa-eye fa-lg';
                // button_view.appendChild(icon_view);
                // view.appendChild(button_view);
                // action.appendChild(a_view); -->
 
</section>
<?= $this->endSection()?> 
