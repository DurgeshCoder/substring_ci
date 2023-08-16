<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Welcome to Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->

<!--content of the page -->
<?= $this->section("content"); ?>

<?= $this->include('home/hero'); ?>
<?= $this->include('home/about'); ?>
<?= $this->include('home/values'); ?>
<?= $this->include('home/counts'); ?>
<?= $this->include('home/features'); ?>
<?= $this->include('home/why'); ?>
<?= $this->include('home/success_stories'); ?>
<?= $this->include('home/footer'); ?>




<?= $this->endSection(); ?>
<!--send of the content section-->

