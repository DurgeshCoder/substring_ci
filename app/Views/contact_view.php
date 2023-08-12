<?= $this->extend('default') ?>


<!--pageTitle section start-->

<?= $this->section('pageTitle') ?>
Contact US | Substring Technologies
<?= $this->endSection() ?>
<!--pageTitle section end-->
<!--start content section-->
<?= $this->section('content') ?>


<?= $this->include("page_section/hero_section"); ?>
<?= $this->include("page_section/about_section"); ?>
<?= $this->include("page_section/values_section"); ?>
<?= $this->include("page_section/counts_section"); ?>
<?= $this->include("page_section/features_section"); ?>







<?= $this->endSection() ?>
<!--end content section-->


