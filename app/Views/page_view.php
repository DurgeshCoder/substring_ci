<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Welcome to Substring Technologies
<?= $this->endSection() ?>

<!--end of the title section-->

<!--page pageKeywords-->
<?= $this->section("pageKeywords") ?>
Learn to code,Coding for beginners, Coding tutorials,Coding courses,Coding bootcamp,Coding interview,Coding jobs,Coding skills,Coding languages,substring technologies,website development,programming courses
<?= $this->endSection() ?>

<!--end of the pageKeywords section-->
<!--page pageDescription-->
<?= $this->section("pageDescription") ?>
Welcome to substring technologies.Learn to code from scratch with our beginner-friendly tutorials.
We offer a variety of coding courses for all levels, from beginner to advanced.Our coding bootcamp will help you learn the skills you need to get a job in tech.Take on coding challenges to test your skills and improve your problem-solving abilities.Prepare for your coding interview with our practice questions and mock interviews.Find coding jobs that match your skills and interests.Build your coding skills with our community of like-minded learners.
<?= $this->endSection() ?>

<!--end of the pageDescription section-->

<!--content of the page -->
<?= $this->section("content"); ?>

<?= $this->include('home/hero'); ?>
<?= $this->include('home/about'); ?>
<?= $this->include('home/values'); ?>
<?= $this->include('home/counts'); ?>
<?= $this->include('home/features'); ?>
<?= $this->include('home/services'); ?>
<?= $this->include('home/app'); ?>
<?php //= $this->include('home/pricing');?>
<?= $this->include('home/faq'); ?>
<?php //= $this->include('home/portfolio') ?>
<?= $this->include('home/testimonials'); ?>
<?= $this->include('home/team'); ?>
<?= $this->include('home/clients'); ?>
<?= $this->include('home/recent_blog_posts'); ?>
<?= $this->include('home/contact'); ?>
<?= $this->include('home/footer'); ?>




<?= $this->endSection(); ?>
<!--send of the content section-->

