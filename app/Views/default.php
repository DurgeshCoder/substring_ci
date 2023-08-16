<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('pageTitle') ?></title>
    <?= link_tag('static/css/custom_style.css') ?>

    <?= link_tag('static/vendor/bootstrap-icons/bootstrap-icons.css') ?>
    <?= link_tag('static/vendor/glightbox/css/glightbox.min.css') ?>
    <?= link_tag('static/vendor/remixicon/remixicon.css') ?>
    <?= link_tag('static/vendor/swiper/swiper-bundle.min.css') ?>

    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
<!--Header-->
<?= $this->include('menubar'); ?>
<!--content data is inserted here-->
<?= $this->renderSection("content") ?>

<!--Footer-->
<?= $this->include('footer'); ?>
<!-- Vendor JS Files -->
    <script src="<?= base_url('/static/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
        <script src="<?= base_url('/static/vendor/aos/aos.js') ?>"></script>

                <script src="<?= base_url('/static/vendor/glightbox/js/glightbox.min.js') ?>"></script>
                    <script src="<?= base_url('/static/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
                        <script src="<?= base_url('/static/vendor/swiper/swiper-bundle.min.js') ?>"></script>
                            <script src="<?= base_url('/static/vendor/php-email-form/validate.js') ?>"></script>


 <script src="<?= base_url('/static/js/main.js') ?>">
</script>
</body>
</html>