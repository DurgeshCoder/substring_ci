<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title') ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tiny.cloud/1/1aq2dlr3nt75ir8urqu4yww0ekug0t80vmx7qsyr11wvi9uw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
   
      module.exports = {
  darkMode: 'class',
  // ...
}
    </script>
    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark')
      }
  </script>
  <?php if(isset($load_admin_js)){
    ?>
<script src="<?= base_url("static/js/admin/admin.js") ?>">" </script>
<?php

} ?>
</head>

<body class='bg-slate-100  dark:bg-gray-900'>

  <?= $this->include('admin/navbar'); ?>

  


  
  
  <?= $this->renderSection('content') ?>


  <?= $this->include('admin/sidebar'); ?>
 
















<script>
   const ctx = document.getElementById('myChart');
 
   new Chart(ctx, {
     type: 'line',
     data: {
       labels: ['Jan', 'Feb', 'March', 'April', 'March', 'May','June','July','Aug','Sep','Oct','Nov','Dec'],
       datasets: [{
         
         data: [12, 19, 3, 5, 2, 3, 6, 9, 13, 17, 11, 4],
         borderWidth: 4
       },
       {
         
         data: [15, 9, 23, 25, 12, 13,5, 19, 20, 5, 2, 11],
         borderWidth: 1
       }
        ]
     },
     options: {
      responsive: true,
      interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: true,
        
      }
    },
       scales: {
         y: {
        type: 'linear',
        display: true,
        position: 'left',
      },
      y1: {
        type: 'linear',
        display: true,
        position: 'right',
       }
     }
   }});
 </script>
 <script>
   const mybar = document.getElementById('mybarChart');
 
   new Chart(mybar, {
     type: 'polarArea',
     data: {
       labels: ['Mon', 'Tues', 'Wed', 'Thus', 'Fri', 'Sat','Sun'],
       datasets: [
       {
         label: '# of 2023',
         data: [ 25, 12, 13,5, 19, 20, 5,],
         borderWidth: 1
       }
        ]
     },
     options: {
      responsive: true,
      interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: true,
        
      }
    },
       scales: {
         y: {
        type: 'linear',
        display: true,
        position: 'left',
      },
      y1: {
        type: 'linear',
        display: true,
        position: 'right',
       }
     }
   }});
 </script>
 <script>
   var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});
 </script>






<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


</body>
</html>