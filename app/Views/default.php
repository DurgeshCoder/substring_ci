<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('pageTitle') ?></title>
    <?= link_tag('static/css/custom_style.css') ?>
    <?= link_tag('static/animation/aos/aos.css') ?>
    <?= link_tag('static/animation/bootstrap-icons/bootstrap-icons.css') ?>
    <?= link_tag('static/animation/glightbox/css/glightbox.min.css') ?>
    <?= link_tag('static/animation/remixicon/remixicon.css') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <?= link_tag('static/css/output.css') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>
<body data-aos-duration="1000" class="  dark:bg-gray-900 dark:text-blue-50" data-aos-delay="0">
<!--Header-->
<?= $this->include('menubar'); ?>
<!--content data is inserted here-->
<?= $this->renderSection("content") ?>


<!-- Vendor JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="<?= base_url('static/animation/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('static/animation/aos/aos.js') ?>"></script>
<script src="<?= base_url('static/animation/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('static/animation/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('static/animation/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('static/animation/php-email-form/validate.js') ?>"></script>
<script>
    AOS.init({
        duration: 500
    });
</script>


<script src="<?= base_url('static/js/main.js') ?>">
</script>
</body>
</html>