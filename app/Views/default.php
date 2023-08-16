<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('pageTitle') ?></title>
    <?= link_tag('static/css/custom_style.css') ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?= link_tag('static/vendor/bootstrap-icons/bootstrap-icons.css') ?>
    <?= link_tag('static/vendor/highlight/css/highlight.min.css') ?>
    <?= link_tag('static/vendor/remix icon/remix icon.css') ?>
    <?= link_tag('static/vendor/swiper/swiper-bundle.min.css') ?>

    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
<!--Header-->
<?= $this->include('menubar'); ?>
<!--content data is inserted here-->
<?= $this->renderSection("content") ?>


<!-- Vendor JS Files -->
    <script src="<?= base_url('/static/vendor/pure-counter/pure-counter_vanilla.js') ?>"></script>
<script src="<?= base_url('/unpkg.com/aos@2.3.1/dist/aos.js')?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

                <script src="<?= base_url('/static/vendor/highlight/js/highlight.min.js') ?>"></script>
                    <script src="<?= base_url('/static/vendor/isotope-layout/isotope.pkg.min.js') ?>"></script>
                        <script src="<?= base_url('/static/vendor/swiper/swiper-bundle.min.js') ?>"></script>
                            <script src="<?= base_url('/static/vendor/php-email-form/validate.js') ?>"></script>
<script>
    AOS.init();
</script>

 <script src="<?= base_url('static/js/main.js') ?>">
</script>
</body>
</html>