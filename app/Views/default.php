<!doctype html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('pageTitle') ?></title>
    <meta name="keywords"
          content="<?= $this->renderSection('pageKeywords') ?>"/>
    <meta name="description" content="<?= $this->renderSection('pageDescription') ?>"/>
    <?= link_tag('static/css/custom_style.css') ?>
    <?= link_tag('static/animation/aos/aos.css') ?>
    <?= link_tag('static/animation/bootstrap-icons/bootstrap-icons.css') ?>
    <?= link_tag('static/animation/glightbox/css/glightbox.min.css') ?>
    <?= link_tag('static/animation/remixicon/remixicon.css') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <?= link_tag('static/css/output.css') ?>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

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


</head>
<body data-aos-duration="1000" class="  dark:bg-gray-900 dark:text-blue-50" data-aos-delay="0">
<!--Header-->
<?= $this->include('menubar'); ?>
<!--content data is inserted here-->
<?= $this->renderSection("content") ?>

<?= $this->include("home/footer") ; ?>
<!-- Vendor JS Files -->

<script src="<?= base_url('static/animation/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('static/animation/aos/aos.js') ?>"></script>
<script src="<?= base_url('static/animation/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('static/animation/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('static/animation/swiper/swiper-bundle.min.js') ?>"></script>
<!--<script src="--><?php //= base_url('static/animation/php-email-form/validate.js') ?><!--"></script>-->

<script>
    AOS.init({
        duration: 500
    });
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        loop:true,
        slidesPerView: "1",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
       
        
      },
    });
</script>



<script>
        AOS.init();
      </script>
       <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>   
      <script src="https://cdn.tailwindcss.com/3.3.0"></script>   
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper(".mySwiper1", {
          speed: 600,
          parallax: true,
          loop:true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          on: {
            slideChangeTransitionStart: function () {
              $('.animation').hide(0);
              $('.animation').removeClass('aos-init').removeClass('aos-animate');
            },
            slideChangeTransitionEnd: function () {
              $('.animation').show(0);
              AOS.init();
            },
         } 
        });
        AOS.init();
      </script>
      <script>
        import {
      Tab,
      initTE,
    } from "tw-elements";
    
    initTE({ Tab });
    </script>



<!-- <-- light and dark mood  -->
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


<!-- light and dark mood for the larger screen   -->
 <script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon-1');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon-1');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle-1');

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




<!-- end of dark and light mood -->
      <script src="https://cdn.tailwindcss.com/3.3.0"></script> 
       <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>   
        
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
      
      <script>
        import {
      Tab,
      initTE,
    } from "tw-elements";
    
    initTE({ Tab });
    </script>

    <script src="<?= base_url('static/js/main.js') ?>">
</script>
</body>
</html>