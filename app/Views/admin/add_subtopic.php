<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Add Sub Topic
<?= $this-> endSection()?>
<?= $this-> section("content" )?>

<script>
  // all subjects
 get_all_courses().then((data)=>{
  
  // add the courses to select  box
  course_select_box=document.getElementById("courses")
  for(let c of data){
    option_node=document.createElement("option")
    option_node.innerHTML=`${c.name}`
    option_node.value=c.course_id
    course_select_box.appendChild(option_node)
  }
 })

 function courseChange() {
    const courseSelectBox = document.getElementById("courses");
    const selectedCourseId = courseSelectBox.value;
    const topicsSelectBox = document.getElementById('topics');
    
    // Clear existing options in the "topics" select box
    topicsSelectBox.innerHTML = '';

    // Fetch topics for the selected course
    get_topics_of_course(selectedCourseId).then(data => {
        // Add an initial placeholder option
        const placeholderOption = document.createElement("option");
        placeholderOption.innerHTML = "-- Select Topic --";
        placeholderOption.value = "";
        topicsSelectBox.appendChild(placeholderOption);

        // Add topics based on the selected course
        for (let t of data) {
            const optionNode = document.createElement("option");
            optionNode.innerHTML =`${t.topic_name}`;
            optionNode.value = t.topic_id;
            topicsSelectBox.appendChild(optionNode);
        }
    });
}
</script>

<section id="add_subtopic" class=' mx-8 md:mx-16 md:ml-64 my-16 '>
 <div class='md:ml-16 bg-white pb-8 rounded-lg shadow-lg dark:bg-gray-800'>

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


 <h1 class="text-center py-4 text-4xl font-bold mb-4 text-blue-800 dark:text-gray-100">Add Subtopics</h1>


   

 <form action="<?= base_url('admin/add_subtopic') ?>" method="post">
  <!-- dropdown 1 start -->
   <div class="w-60 md:w-96 mx-auto my-8 md:my-12 dark:bg-gray-900 rounded">
      <select onChange="courseChange()" data-te-select-init data-te-select-filter="true" name='subject_id' id='courses'>
        <option value="">Select a Course</option>      
      </select>
     </div>

     <!-- dropdown 1 ends -->
     <!-- dropdown 2 start -->
     <div class="w-60 md:w-96 mx-auto my-8 md:my-12 dark:bg-gray-900 rounded">
      <select data-te-select-init data-te-select-filter="true" name='topic_id' id='topics'>
        <option value="">Select a Topic</option>
      </select>
     </div>
     <!-- dropdown 2 ends -->
    <div class="container p-8 mx-auto" id='input_fields'>
  <div class="relative z-0 w-full group mb-10 ">
      <input type="text" name="subtopic_name1" id="subtopic_name" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
      <label for="subtopic_name" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Subtopic Name</label>
  </div>
  <div class="relative z-0 w-full mb-10 group">
      <textarea name="description1" id="description" class="block py-2.5 px-2.5 w-full text-base text-gray-900 bg-transparent rounded-lg border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /></textarea>
      <label for="description" class="peer-focus:font-medium absolute ml-2 text-lg text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-85 peer-focus:-translate-y-9">Description</label>
  </div>
  <div class="flex justify-center items-center mb-4">
    <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
   </div>
  


    </div>
    


  </form>
      <div class="w-auto h-auto my-8">
        <div class="flex-1 h-full">
          <div id='add_button' class="flex items-center h-10 w-10 justify-center  mx-auto flex-1 p-2 bg-blue-700 text-white shadow rounded-full">
            <div class="relative">
            <i class="fa-solid fa-plus fa-lg"></i>
            </div>
            </div>
          <h1 class='text-blue-700 text-lg font-semibold text-center'>Add More ?</h1>
        </div>
      </div>
 </div>
 
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<script>
  let fieldCount = 1;
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
      label1.textContent = 'Sub Topic Name';
      div_child1.appendChild(label1);

      let input1 = document.createElement('input');
      input1.name='subtopic_name'+ fieldCount
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
      removeButton.className='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'
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