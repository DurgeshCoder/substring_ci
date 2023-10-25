<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Courses offered by Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->



<style>
    .swiper {
      width: 100%;
      height: 60vh;
      background: #000;
    }

    .swiper-slide {
      
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
     
    }

    .parallax-bg {
      position: absolute;
      left: 0;
      top: 0;
      width: 130%;
      height: 100%;
      -webkit-background-size: cover;
      background-size: cover;
      background-position: center;
    }



</style>





<!--content of the page -->
<?= $this->section("content"); ?>


<div class="container">


    <?php


    /**
     * @type $courses
     */


    foreach ($courses as $key => $value) { ?>


        <div class="p-3 border shadow <?= $value->admission_open ? 'bg-red-100' : 'bg-green-400' ?>">

            <p class="text-3xl">
                <?= $value->title ?>
            </p>
            <p class="fw-bold">
                <?= $value->short_description ?>
            </p>
            <p class="fw-bold">
                <?= $value->long_description ?>
            </p>

        </div>

    <?php } ?>


</div>


<?= $this->endSection(); ?>
<!--send of the content section-->

