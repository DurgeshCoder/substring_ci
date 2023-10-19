<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Edit Course <?= $course['name']; ?>
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<script>
    tinymce.init({
      selector: '#long_description'
    });
  </script>


<section id="add_coureses" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 <div class='md:ml-16 bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800'>
 <form action="<?= base_url('admin/update_course/').$course['course_id'] ?>" method="post" enctype="multipart/form-data">

 
    
     <h1 class="text-center  text-4xl font-bold mb-4 text-blue-800 dark:text-gray-100">Edit Coureses</h1>
    
  <div class="relative z-0 w-full group mb-10">
      <input type="text" name="course_name" id="course_name" value="<?= $course['name']; ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="">
      <label for="course_name" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Coures Name</label>
  </div>
  <div class="relative z-0 w-full mb-10 group">
      <textarea name="short_description" id="short_description"  value="" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ><?= $course['short_description']; ?></textarea>
      <label for="short_description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Short Description</label>
  </div>
  <div class="relative z-0 w-full mb-10 group">
      <textarea name="long_description" cols="30" rows="8" id="long_description" value=""  class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ><?= $course['long_description']; ?></textarea>
      <label for="long_description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 -top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Long Description</label>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-10 group">
        <input type="number" name="fee" id="fee" value="<?= $course['fee']; ?>"  class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="fee" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Fee</label>
    </div>
    <div class="relative z-0 w-full mb-10 group">
        <input type="number" name="discounted_fee" id="discounted_fee" value="<?= $course['discounted_fee']; ?>"  class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="discounted_fee" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Discounted Fee</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full  group mt-2">
        <select name="mode" id="mode" value="<?= $course['mode']; ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Mode">
            
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
            <option value="Online and Offline Both">Online and Offline Both</option>
        </select>
        <label for="mode" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7 ">Mode</label>
        
    </div>

    
     <div class="relative z-0 w-full mt-2 group">
        <input type="file" name="cover_image" id="cover_image" value="<?= $course['cover_image']; ?>" class="block  px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-[1px] border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  required>
        <label for="cover_image" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Cover Image</label>
    </div> 
    <div class="relative z-0 w-full  group">
        <input type="text" name="duration" id="duration"value="<?= $course['duration']; ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
        <label for="duration" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Duration</label>
     </div>
     <div class="relative z-0 w-full  group">
        <input type="text" name="admission_open" id="admission_open" value="<?= $course['admission_open']; ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
        <label for="admission_open" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Number of Admissions Open</label>
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
            placeholder="Select a date" required />
          <label
            for="floatingInput"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.57rem] leading-[1.6] text-gray-900 text-lg transition-all duration-200 ease-out peer-focus:-translate-y-[2.1rem] peer-focus:scale-[1] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
            >Starting Date</label>
        </div>
     </div>
     <div class="relative z-0 w-full mb-10 group mt-2">
        <input type="number" name="rating" id="rating" value="<?= $course['rating']; ?>"  class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="rating" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Rating</label>
    </div>


  </div>

  <div class="relative z-0 w-full group mb-10">
    <input type="text" name="slug" id="slug" value="<?= $course['slug']; ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
    <label for="slug" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Slug</label>
</div>

  <div class="relative z-0 w-full group mb-10">
    <input type="text" name="instructor" id="instructor" value="<?= $course['instructor']; ?>" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" >
    <label for="instructor" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Instructor</label>
</div>

<div class="relative z-0 w-full mb-10 group">
    <textarea name="coureses_resourses" id="coureses_resourses" value=""  class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ><?= $course['course_resourses']; ?></textarea>
    <label for="coureses_resourses" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-7">Coureses Resourses</label>
</div>
  
<div class="flex justify-center items-center">
    <button type="submit" value="Submit" class="text-white   bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
</div>
  
   

  


</form>
 </div>
</section>
<?= $this->endSection()?>
