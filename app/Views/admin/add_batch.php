<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Add Batch
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<section id="add_topic" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 <div class='md:ml-16 bg-white pb-8 rounded-lg shadow-lg dark:bg-gray-800 '>


 <div id="alert-border-1" class="flex items-center p-4 mb-4 rounded-t-lg text-blue-800 border-t-4 border-blue-500 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
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
 <h1 class="text-center py-4  text-4xl font-bold mb-4 text-blue-800 dark:text-gray-100">Add Batch</h1>

 <?= validation_list_errors() ?>
 

 
    <!-- dropdown start -->
  <form action="<?= base_url('admin/add_batch') ?>" method="post"> 
    <div class="w-60 md:w-96 mx-auto my-8 md:my-12 dark:bg-gray-900 rounded">
      <select data-te-select-init data-te-select-filter="true" name="subject_id">
        <option value="">Select a Course</option>
        <?php foreach($coureses as $course): ?>
        <option value="<?=$course['course_id']?>"><span></span><?=$course['name']?></option>
        <?php endforeach ?>
      </select>
     </div>

      <!-- dropdowm ends -->
   
    
       
    <div class="container grid gap-2 w-full mx-auto px-8" id="input_fields" name="add_more">

          <div class="relative z-0 w-full group mb-5 grid " id="input_fields">
            <input type="text" name="batch_name" id="batch_name" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=""/>
            <label for="topic_name" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Batch Name</label>
        </div>
    
        <div class="relative z-0 w-full mb-10 group">
          <textarea name="short_description" id="short_description" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=""></textarea>
          <label for="short_description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Description</label>
        </div>
            <div class="relative z-0 w-full mb-10 group">
        <textarea name="long_description" cols="30" rows="8" id="long_description" value="" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
        <label for="long_description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 -top-8 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Long Description</label>
  </div>

  <div class="grid md:grid-cols-2 gap-6">

    <div class="relative z-0 w-full  group mt-2">

        <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
            <input type="text" name="start_date" value=""
            class="peer block min-h-[auto] w-full rounded-lg border-1 bg-transparent px-3 py-2.5 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            placeholder="Select a date"/>
            <label
            for="floatingInput"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.57rem] leading-[1.6] text-gray-900 text-lg transition-all duration-200 ease-out peer-focus:-translate-y-[2.1rem] peer-focus:scale-[1] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Starting Date</label>
        </div>
    </div>

    <div class="relative z-0 w-full  group">
        <input type="text" name="timing" id="timing" value="" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
        <label for="timing" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Batch Timing</label>
     </div>

    <div class="relative z-0 w-full  group mt-2">
        <select name="batch_status" id="batch_status" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="batch_status">
            
            <option class="dark:bg-gray-700" value="Upcomming">Upcoming</option>
            <option class="dark:bg-gray-700" value="Running">Running</option>
            <option class="dark:bg-gray-700" value="Finished">Finished</option>
        </select>
        <label for="batch_status" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 ">Batch Status</label>
        
    </div>

    <div class="relative z-0 w-full  group mt-2">
        <select name="admission_status" id="admission_status" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="admission_status">
            
            <option class="dark:bg-gray-700" value="Open">Open</option>
            <option class="dark:bg-gray-700" value="Close">Close</option>
        </select>
        <label for="admission_status" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 ">Admission Status</label>
        
    </div>
    
    
     <div class="relative z-0 w-full  group">
        <input type="text" name="number_of_admissions" id="number_of_admissions" value="" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
        <label for="number_of_admissions" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Number of Admissions</label>
     </div>



    
     

  </div>


  <div class="relative z-0 w-full group mb-10">
    <input type="text" name="instructor" id="instructor" value="" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
    <label for="instructor" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Instructor</label>
</div>

<div class="relative z-0 w-full mb-10 group">
    <textarea name="message" id="message" value="" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
    <label for="message" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Message</label>
</div>

        <div class="flex justify-center items-center">
      <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
    </div>
    </div>
  
    
   

  
</form>


 

 

</section>



<?= $this->endSection()?>