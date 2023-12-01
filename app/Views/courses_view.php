<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Live Batches on Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->

<!--content of the page -->
<?= $this->section("content"); ?>
<?= $this->include("courses/banner") ; ?>
<?= $this->include("courses/course_detail") ; ?>





<?= $this->endSection(); ?>
<!--send of the content section-->

