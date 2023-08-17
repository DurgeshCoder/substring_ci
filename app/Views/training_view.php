<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Courses offered by Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->

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

