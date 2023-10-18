<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Add Topic
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<section id="add_topic" class=' mx-8 md:mx-16 sm:ml-64 my-16 '>
 <div class='sm:ml-64 bg-white pb-8 rounded-lg shadow-lg dark:bg-gray-800 '>


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
 <h1 class="text-center py-4  text-4xl font-bold mb-4 text-blue-800 dark:text-gray-100">Add Topic</h1>


 

 
    <!-- dropdown start -->
  <form action="<?= base_url('admin/add_topic') ?>" method="post"> 
    <div class="w-60 md:w-96 mx-auto my-8 md:my-12">
      <select data-te-select-init data-te-select-filter="true" name="subject_id">
        <option value="">Select a Course</option>
        <?php foreach($coureses as $course): ?>
        <option value="<?=$course['course_id']?>"><?=$course['course_id']?><span>.  </span><?=$course['name']?></option>
        <?php endforeach ?>
      </select>
     </div>

    <!-- dropdowm ends -->
   
    
       
    <div class="container grid gap-2 px-8" id="input_fields" name="add_more">

          <div class="relative z-0 w-full group mb-5 grid " id="input_fields">
            <input type="text" name="topic_name1" id="topic_name" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
            <label for="topic_name" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Topic Name</label>
        </div>
    
        <div class="relative z-0 w-full mb-10 group">
          <textarea name="description1" id="description" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /></textarea>
          <label for="description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Description</label>
        </div>
    </div>
  
    
    <div class="flex justify-center items-center">
      <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
    </div>

  
</form>
<div class="w-auto h-auto my-8">
        <div class="flex-1 h-full">
          <div type="button" id="add_button"  value="Add Field" class="flex items-center h-10 w-10 justify-center  mx-auto flex-1 p-2 bg-blue-700 text-white shadow rounded-full">
            <div class="relative">
              <i class="fa-solid fa-plus fa-lg"></i>
            </div>
          </div>
         
          <h1 class='text-blue-700 text-lg font-semibold text-center'>Add More ?</h1>
        </div>
      </div>
      
 </div>
   

 

 

</section>
<script src="https://cdn.tailwindcss.com"></script>  
<script>
  let fieldCount = 1;
  function test(){
    fieldCount++
  }
  const addButton =document.getElementById("add_button");
  console.log(addButton);
  const container = document.getElementById('input_fields');
  addButton.addEventListener('click', function(e) {
    fieldCount++;
   console.log(fieldCount);
      // Adding the container div
     
      let div = document.createElement('div');
      div.className='container grid gap-2'
      container.append(div);
      let div_child1 = document.createElement('div');
      div_child1.className='relative z-0 w-full group mb-5 '
      div.appendChild(div_child1);
      let label1 = document.createElement('label');
      label1.className='peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9';
      label1.textContent = 'Topic Name';
      div_child1.appendChild(label1);

      let input1 = document.createElement('input');
      input1.name='topic_name'+ fieldCount
      input1.className='block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-[1px] border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer'
      div_child1.appendChild(input1);
     
      let div_child2 = document.createElement('div');
      div_child2.className='relative z-0 w-full group mb-5 '
      div.appendChild(div_child2);
      let label2 = document.createElement('label');
      label2.className='peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9';
      label2.textContent = 'Description';
      div_child2.appendChild(label2);

      let textarea = document.createElement('textarea');
      textarea.name='description'+fieldCount
      textarea.className='block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer'
      div_child2.appendChild(textarea);

      // Create the remove button
      const removeButton = document.createElement('button');
      removeButton.className='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'
      div.appendChild(removeButton);
      removeButton.textContent = 'Remove';
      removeButton.addEventListener('click', () => removeField(div));
  });
  
 

  function removeField(containerToRemove) {
      if (fieldCount > 1) {
          // Remove the specified container
          containerToRemove.parentNode.removeChild(containerToRemove);

          fieldCount--;
      } else {
          alert("You can't remove the last field.");
      }
  }
</script>

<?= $this->endSection()?>