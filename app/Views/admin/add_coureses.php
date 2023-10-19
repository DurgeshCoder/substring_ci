<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Add Course
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
  
  <script>
    tinymce.init({
      selector: '#long_description'
    });
  </script>


<section id="add_coureses" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 <div class='md:ml-16 bg-white  rounded-lg shadow-lg dark:bg-gray-800'>
    <!-- messaage start -->
 <div id="alert-border-1" class="flex items-center rounded-t-lg p-4 mb-4 text-blue-800 border-t-4 border-blue-600 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
    <div class="ml-3 text-sm font-medium">
      <?php
      if(session()->getFlashdata('status'))
      {
          echo session()->getFlashdata('status');
      }
      ?>
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
</div>
<!-- message end -->

    <?= validation_list_errors() ?>

   
 <form action="<?= base_url('admin/add_coureses') ?>" method="post" class='p-8' enctype="multipart/form-data" >
     <h1 class="text-center  text-4xl font-bold mb-8 text-blue-800 dark:text-gray-100">Add Course</h1>
  <div class="relative z-0 w-full group mb-10">
      <input type="text" name="course_name" id="course_name" value="<?= set_value('course_name') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="">
      <label for="course_name" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Coures Name</label>
    
    
    
     
      
      
      
      
    
  </div>
  
  <div class="relative z-0 w-full mb-10 group">
      <textarea name="short_description" id="short_description" value="<?= set_value('short_description') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
      <label for="short_description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Short Description</label>
  </div>
  <div class="relative z-0 w-full mb-10 group">
      <textarea name="long_description" cols="30" rows="8" id="long_description" value="<?= set_value('long_description') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
      <label for="long_description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 -top-8 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Long Description</label>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-10 group">
        <input type="number" name="fee" id="fee" value="<?= set_value('fee') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="fee" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Fee</label>
    </div>
    <div class="relative z-0 w-full mb-10 group">
        <input type="number" name="discounted_fee" id="discounted_fee" value="<?= set_value('discounted_fee') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="discounted_fee" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Discounted Fee</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 gap-6">
    <div class="relative z-0 w-full  group mt-2">
        <select name="mode" id="mode" value="<?= set_value('mode') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Mode">
            
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
            <option value="Online and Offline Both">Online and Offline Both</option>
        </select>
        <label for="mode" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 ">Mode</label>
        
    </div>
    <div class="relative z-0 w-full mt-2 group">
        <input type="file" name="cover_image" id="cover_image" value="<?= set_value('cover_image') ?>" class="block  px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-[1px] border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="cover_image" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Cover Image</label>
        
    </div>
    <div class="relative z-0 w-full  group">
        <input type="text" name="duration" id="duration" value="<?= set_value('duration') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
        <label for="duration" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Duration</label>
     </div>
     <div class="relative z-0 w-full  group">
        <input type="text" name="admission_open" id="admission_open" value="<?= set_value('admission_open') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
        <label for="admission_open" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Number of Admissions</label>
     </div>



     <div class="relative z-0 w-full  group mt-2">

          <div
          class="relative mb-3"
          data-te-datepicker-init
          data-te-input-wrapper-init>
          <input
            type="text"
            name="start_date"
            value="<?= set_value('start_date') ?>"
            class="peer block min-h-[auto] w-full rounded-lg border-1 bg-transparent px-3 py-2.5 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            placeholder="Select a date" />
          <label
            for="floatingInput"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.57rem] leading-[1.6] text-gray-900 text-lg transition-all duration-200 ease-out peer-focus:-translate-y-[2.1rem] peer-focus:scale-[1] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Starting Date</label>
        </div>
     </div>
     <div class="relative z-0 w-full mb-10 group mt-2">
        <input type="number" name="rating" id="rating" value="<?= set_value('rating') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="rating" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Rating</label>
    </div>


  </div>
  <div class="relative z-0 w-full group mb-10">
    <input type="text" name="slug" id="slug" value="<?= set_value('slug') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
    <label for="slug" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Slug</label>
</div>

  <div class="relative z-0 w-full group mb-10">
    <input type="text" name="instructor" id="instructor" value="<?= set_value('instructor') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
    <label for="instructor" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Instructor</label>
</div>

<div class="relative z-0 w-full mb-10 group">
    <textarea name="coureses_resourses" id="coureses_resourses" value="<?= set_value('coureses_resourses') ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
    <label for="coureses_resourses" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Course Resourses</label>
</div>
  
<div class="flex justify-center items-center">
    <button type="submit" value="Submit" class="text-white   bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
</div>
  
   

  


</form>
 </div>
</section>
<?= $this->endSection()?>
