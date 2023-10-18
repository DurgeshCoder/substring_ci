<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Topics
<?= $this-> endSection()?>
<?= $this-> section("content" )?>

<script>
    // all subjects
   get_all_courses().then((data)=>{
    
    // add the courses to select  box
    course_select_box=document.getElementById("courses")
    for(let c of data){
      option_node=document.createElement("option")
      option_node.innerHTML=`${c.course_id}  ${c.name}`
      option_node.value=c.course_id
      course_select_box.appendChild(option_node)

    }
   })

   function courseChange() {
    const courseSelectBox = document.getElementById("courses");
    const selectedCourseId = courseSelectBox.value;
    const topicTable = document.getElementById('topic_table');
    
    // Clear existing rows in the table
    topicTable.innerHTML = '';

    // Fetch topics for the selected course
    get_topics_of_course(selectedCourseId).then(data => {
        if (data.length === 0) {
            // If there are no topics, you can display a message
            const noTopicsRow = document.createElement("tr");
            noTopicsRow.innerHTML = '<td colspan="4">No topics available for the selected course.</td>';
            topicTable.appendChild(noTopicsRow);
        } else {
            // Add topics based on the selected course
            for (let t of data) {
                const row = document.createElement("tr");
                row.className='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600';

                // const topic_id = document.createElement("td");
                // topic_id.className='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'
                // topic_id.textContent = t.topic_id;

                const topic_name = document.createElement("td");
                topic_name.className='px-6 py-4 w-80 font-medium text-blue-800 text-lg';
                topic_name.textContent = t.topic_name;

                const description = document.createElement("td");
                description.className='px-6 py-4';
                description.textContent = t.description;

                const action = document.createElement("td");
                action.className = 'px-6 py-4 text-center flex justify-center';

                const a_view = document.createElement('a');
                a_view.className = 'font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2';
                a_view.href = "topic_view/"+t.topic_id;
                const button_view = document.createElement('button');
                button_view.className = 'focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:focus:ring-yellow-900';
                const icon_view = document.createElement('i');
                icon_view.className = 'fa-solid fa-eye fa-lg';
                button_view.appendChild(icon_view);
                a_view.appendChild(button_view);
                action.appendChild(a_view);

                const a_edit = document.createElement('a');
                a_edit.className = 'font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2';
                a_edit.href = "edit_topic/"+t.topic_id;
                const button_edit = document.createElement('button');
                button_edit.className = 'focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800';
                const icon_edit = document.createElement('i');
                icon_edit.className = 'fa-solid fa-pen-to-square fa-lg';
                button_edit.appendChild(icon_edit);
                a_edit.appendChild(button_edit);
                action.appendChild(a_edit);

                const a_delete = document.createElement('a');
                a_delete.className = 'font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2';
                a_delete.href = "#!";
                const button_delete = document.createElement('button');
                button_delete.className = 'confirm_del_btn  focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900';
                button_delete.value=t.topic_id
                const icon_delete = document.createElement('i');
                icon_delete.className = 'fa-solid fa-trash fa-lg';
                button_delete.appendChild(icon_delete);
                a_delete.appendChild(button_delete);
                action.appendChild(a_delete);


             
                // row.appendChild(topic_id);
                row.appendChild(topic_name);
                row.appendChild(description);
                row.appendChild(action);

                topicTable.appendChild(row);
            }
        }
    });
}
  
  </script>


<section class='topics mx-8 md:mx-16 sm:ml-64 my-16' id='topics'  >
<div class="relative overflow-x-auto shadow-md sm:rounded-lg sm:ml-64">

    <!-- messaage start -->
 <div id="alert-border-1" class="flex items-center rounded-t-lg p-4  text-blue-800 border-t-4 border-blue-600 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
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
<h1 class="text-center bg-white text-4xl font-bold py-4 text-blue-800 dark:text-gray-100 dark:bg-gray-800">Topics</h1>




    <div class="py-4 pl-4 bg-white dark:bg-gray-800 grid justify-start grid-cols-1 lg:grid-cols-2">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1 ">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-50 dark:border-gray-600 dark:placeholder-gray-900 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Topics">
        </div>
        <div class="w-60 md:w-96 mt-1 bg-gray-50">
            <select onChange="courseChange()" data-te-select-init data-te-select-filter="true" name='subject_id' id='courses'>
              <option value="">Select a Course</option>      
            </select>
           </div>
    </div>
   








    <table class="w-full text-base text-left text-gray-500 dark:text-gray-400 " id="content">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class='text-xl'>
                
                <!-- <th scope="col" class="px-6 py-3">
                    Topic ID
                </th> -->
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody id="topic_table">
        <?php foreach($topics as $topic): ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <!-- <th id="topic_id" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                
                </th> -->
                <td id="topic_name" class="px-6 py-4 w-80 font-medium text-blue-800 text-lg">
                <?=$topic['topic_name']?>
                </td>
                <td id="description" class="px-6 py-4">
                <?=$topic['description']?>
                </td>
                
                <td class="px-6 py-4 text-center flex justify-center">
                

                    <a href="<?php echo base_url('admin/topic_view/'.$topic['topic_id']) ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i class="fa-solid fa-eye fa-lg"></i></button></a>

                    <a href="<?php echo base_url('admin/edit_topic/'.$topic['topic_id']) ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fa-solid fa-pen-to-square fa-lg"></i></button></a>

                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><button type="button" value="<?= $topic['topic_id']?>" class="confirm_del_btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-solid fa-trash fa-lg"></i></button></a> 
                      
                    
                      
                    
                </td>
        
                
                
            </tr>
            <?php endforeach ?>
           
           
        </tbody>
    </table>


    
   
    
   
</div>
<script>
    $(document).ready(function(){
        $(document).on("click",'.confirm_del_btn',function(e){
            e.preventDefault();
            var id= $(this).val();
            const tr=$(this).parent().parent().parent()
            console.log(tr)
            // alert(id)
                    Swal.fire({
                            title: 'Do you want to save the changes?',
                            icon:'info',
                           
                            showCancelButton: true,
                            confirmButtonText: 'Delete',
                            denyButtonText: `Don't save`,
                                }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    Swal.fire('Saved! '+id, '', 'success')
                                    // delete
                                    $.ajax({
                                        url:'delete_topic/'+id,
                                        type:'GET',
                                        error:(error)=>{
                                            console.log(error)
                                        },
                                        success:(response)=>{
                                                if(response.status==200)
                                                {
                                                    Swal.fire(response.status_type,response.status_text,'success')
                                                    tr.remove()
                                                }else{
                                                    Swal.fire(response.status_type,response.status_text,'error')
                                                }
                                                console.log(response)
                                               

                                        }

                                    })
                                } 
                              })
       
        })
    })
</script>

</section>
<?= $this->endSection()?>