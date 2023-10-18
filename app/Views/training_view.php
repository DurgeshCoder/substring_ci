<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Courses offered by Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->

<!--content of the page -->
<?= $this->section("content"); ?>
<?= $this->include("training/banner") ; ?>
<?= $this->include("training/search_course") ; ?>
<?= $this->include("training/courses") ; ?>





<?= $this->endSection(); ?>
<!--send of the content section-->

