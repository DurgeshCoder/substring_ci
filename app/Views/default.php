<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('pageTitle') ?></title>
    <?= link_tag('static/css/custom_style.css') ?>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>

<?= $this->include('menubar'); ?>
<?= $this->renderSection("content") ?>
<script src="<?= base_url('/static/js/main.js') ?>">
</script>
</body>
</html>