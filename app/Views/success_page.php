<<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Successfully Paid
<?= $this->endSection() ?>

<?= $this->section("content"); ?>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto mt-4">
        <img src="<?= base_url("images/ratting.svg") ?>" alt="Success Image" class="mx-auto mb-6" width="300">
        <h1 class="text-green-600 text-3xl font-bold mb-4">Payment Successful!</h1>
        
        

        <p class="text-gray-700">Thank you for your payment. Your transaction was successful.</p>
        <!-- Add any additional details or information you want to display -->

        <!-- Add a link to navigate back to your home or another relevant page -->
        <a href="<?= base_url(); ?>" class="text-blue-500 mt-4 block">Back to Home</a>
    </div>

</body>


<?= $this->endSection(); ?>