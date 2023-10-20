<?= $this-> extend("admin/admin_default") ?>
<?= $this->section("page_title") ?>
Dashboard
<?= $this-> endSection()?>
<?= $this-> section("content" )?>
<div class='md:ml-64 bg-slate-100 dark:bg-gray-900 pt-2'>
<section class="mx-8 md:mx-16 ">
   <div class="grid-cols-1 sm:grid md:grid-cols-2 lg:grid-cols-4 ">
      <div
        class="mx-3 mt-6 flex flex-col  border-[1px] bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
       
        <div class="p-8">
         <span class="bg-gray-200 p-4 rounded-full">
            <i class="fa-solid fa-eye fa-lg text-blue-800"></i>
         </span>
       
          <h5
            class="mb-2 mt-6 text-2xl font-bold leading-tight text-neutral-800 dark:text-neutral-50">
            $45.44K
          </h5>
          <div class="flex justify-between text-base text-neutral-600 dark:text-gray-100 ">
            <div>Total Views </div>
            <div class="text-green-400 ">48.2  <i class="fa-solid fa-arrow-up fa-sm"></i></div>
          </div>
        </div>
      </div>
      <div
        class="mx-3 mt-6 flex flex-col  border-[1px] bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
     
        <div class="p-6">
         <span class= "bg-gray-200 p-4 rounded-full">
         <i class="fa-solid fa-cart-shopping fa-lg text-blue-800"></i>
         </span>
          <h5
            class="mb-2 mt-6 text-2xl font-bold leading-tight text-neutral-800 dark:text-neutral-50">
            $45.44K
          </h5>
          <div class="flex justify-between text-base text-neutral-600 dark:text-gray-100 ">
            <div>Total Profit </div>
            <div class="text-green-400 ">48.2  <i class="fa-solid fa-arrow-up fa-sm"></i></div>
          </div>
        </div>
      </div>
      <div
        class="mx-3 mt-6 flex flex-col  border-[1px] bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
     
        <div class="p-6">
         <span class= "bg-gray-200 p-4 rounded-full">
         <i class="fa-solid fa-briefcase fa-lg text-blue-800"></i>
        </span>
          <h5
            class="mb-2 mt-6 text-2xl font-bold leading-tight text-neutral-800 dark:text-gray-100">
            $45.44K
          </h5>
          <div class="flex justify-between text-base text-neutral-600 dark:text-gray-100 ">
            <div>Total Products </div>
            <div class="text-green-400 ">48.2  <i class="fa-solid fa-arrow-up fa-sm"></i></div>
          </div>
        </div>
      </div>
      <div
        class="mx-3 mt-6 flex flex-col  border-[1px] bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 sm:shrink-0 sm:grow sm:basis-0">
     
        <div class="p-6">
         <span class=" bg-gray-200 p-4 rounded-full">
         <i class="fa-solid fa-people-group fa-lg text-blue-800"></i>
        </span>
          <h5
            class="mb-2 mt-6 text-2xl font-bold leading-tight text-neutral-800 dark:text-neutral-50">
            $45.44K
          </h5>

          <div class="flex justify-between text-base text-neutral-600 dark:text-gray-100 ">
            <div>Total Users </div>
            <div class="text-blue-400 ">48.2  <i class="fa-solid fa-arrow-up fa-rotate-180 fa-sm"></i></div>
          </div>
        </div>
      </div>
    </div>
   </section>

<!-- graph section -->
    <section class="mx-8 md:mx-[75px] my-8">
   <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 ">
      <div
        class="grid lg:col-span-8 border-[1px] bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800">
        <div class="p-6">
           <div class="grid grid-cols-1 md:grid-cols-2 dark:text-gray-100">
              <div class=" mt-2 h-6 w-6 border-2 border-blue-400 rounded-full ">
                 <div class="h-4 m-0.5 w-4 bg-blue-400 rounded-full "><h1 class="ml-8 w-32 font-semibold ">For Year 2022</h1></div>
              </div>
              <div class=" mt-2 h-6 w-6 border-2 border-red-400 rounded-full">
                 <div class="h-4 m-0.5 w-4 bg-red-400 rounded-full "><h1 class="ml-8 w-32 font-semibold ">For Year 2023</h1></div>
              </div>
           </div>
          <div class="w-64 lg:w-full">
            <canvas  id="myChart" ></canvas>
          </div>
          
          
        </div>
      </div>
    
      <div
        class="grid lg:col-span-4  border-[1px] bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800">
        <div class="p-6">
           <div class="flex justify-between">
                <div class="text-xl font-semibold text-gray-900 dark:text-gray-100">Profit This Week</div>
                <div>
                  <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-900 font-normal text-sm text-center inline-flex items-center dark:text-white" type="button">This Week<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg></button>
                  <!-- Dropdown menu -->
                     <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-800">
                      <ul class="py-1 text-sm text-gray-700 dark:text-gray-100" aria-labelledby="dropdownDefaultButton">
                        <li>
                          <a href="#" class="block px-2 py-1 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This Week</a>
                        </li>
                        <li>
                          <a href="#" class="block px-2 py-1 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last Week</a>
                        </li>
                      </ul>
                      </div>
                  </div>
           </div>
          
          <div class="w-64 lg:w-full">
            <canvas id="mybarChart"></canvas>
          </div>
          
          
        </div>
      </div>
    </div>
    </section>

     <!-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
   </div>  -->

</div>
<?= $this->endSection()?>