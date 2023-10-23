<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
All Courses
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<section class='training_coureses mx-8 md:mx-16 md:ml-64 my-16' id='training_coureses'  >

<div class="relative overflow-x-auto shadow-md sm:rounded-lg md:ml-16">
<div id="alert-border-1" class="flex items-center p-4  text-blue-800 border-t-4 border-blue-600 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
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
<h1 class="text-center bg-white text-4xl font-bold py-4 text-blue-800 dark:text-gray-100 dark:bg-gray-800">Our Courses</h1>
 





    <div class="py-4 pl-4 bg-white dark:bg-gray-800">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-52 md:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-900 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Course">
        </div>
    </div>
    <table class="w-full text-base text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class='text-xl'>
                
                <!-- <th scope="col" class="px-6 py-3">
                    Course ID
                </th> -->
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class=" py-3">
                   Short Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Instructor
                </th>
                <th scope="col" class=" py-3">
                    Discounted Fee
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class='course_data'>
            <?php foreach($coureses as $course): ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <!-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              
                </th> -->
                <td class="px-6 py-4 w-80 font-medium text-blue-800 text-lg dark:text-gray-100">
                    <?=$course['name']?>
                </td>
                <td class=" py-4 w-80 dark:text-gray-100">
                    <?=$course['short_description']?>
                </td>
                <td class="px-6 py-4 dark:text-gray-100">
                <?=$course['instructor']?>
                </td>
                <td class=" py-4 dark:text-gray-100">
                Rs.<?=$course['discounted_fee']?>
                </td>
                <td class="px-6 py-4 text-center flex justify-center">
                    


                <a href="<?php echo base_url('admin/course_view/'.$course['course_id']) ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i class="fa-solid fa-eye fa-lg"></i></button></a>



                    <a href="<?php echo base_url('admin/edit_course/'.$course['course_id']) ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fa-solid fa-pen-to-square fa-lg"></i></button></a>

                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-2"><button type="button" value="<?= $course['course_id']?>" class="confirm_del_btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-solid fa-trash fa-lg"></i></button></a>
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
             //alert(id)
                    Swal.fire({
                            title: 'Do you want to delete this Course?',
                            icon:'info',
                           
                            showCancelButton: true,
                            confirmButtonText: 'Delete',
                            denyButtonText: `Don't save`,
                                }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    Swal.fire('Deleted ! '+id, '', 'success')
                                    // delete
                                    $.ajax({
                                        url:'delete_course/'+id,
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