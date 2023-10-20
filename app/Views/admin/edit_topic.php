<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Edit Topic <?= $topic['topic_name']?>
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<section id="add_topic" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 <div class='md:ml-16 bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800 '>
 <h1 class="text-center  text-4xl font-bold mb-4 text-blue-800 dark:text-gray-100">Edit Topic</h1>
 
    <!-- dropdown start -->
  <form action="<?= base_url('admin/update_topic/'.$topic['topic_id']) ?>" method="post"> 


    <!-- dropdowm ends -->
   
    
       
    <div class="container grid gap-2 " id="input_fields" name="add_more">

          <div class="relative z-0 w-full group mb-5 grid " id="input_fields">
            <input type="text" name="topic_name" value="<?= $topic['topic_name']?>" id="topic_name" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
            <label for="topic_name" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Topic Name</label>
        </div>
    
        <div class="relative z-0 w-full mb-10 group">
          <textarea name="description" id="description" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /><?= $topic['description']?></textarea>
          <label for="description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Description</label>
        </div>
    </div>
  
    
    <div class="flex justify-center items-center">
      <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
    </div>

  
</form>


 

 

</section>
<script src="https://cdn.tailwindcss.com"></script>  


<?= $this->endSection()?>