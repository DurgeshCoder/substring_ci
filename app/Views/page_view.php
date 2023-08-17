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
<?= $this->include('home/services'); ?>
<?= $this->include('home/pricing');?>
<?php //= $this->include('home/faq');?>
<?= $this->include('home/portfolio') ?>
<?= $this->include('home/testimonials');?>
<?= $this->include('home/team'); ?>
<?= $this->include('home/clients'); ?>
<?= $this->include('home/recent_blog_posts'); ?>
<?= $this->include('home/contact'); ?>
<?= $this->include('home/footer'); ?>




<?= $this->endSection(); ?>
<!--send of the content section-->

