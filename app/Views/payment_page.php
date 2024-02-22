<<?= $this->extend("default"); ?>

<!--page title-->
<?= $this->section("pageTitle") ?>
Pay
<?= $this->endSection() ?>

<?= $this->section("content"); ?>
<body>
   
    
     <div class="max-w-sm mx-auto my-12">
           
            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <i class="fa-solid fa-money-bill-wave fa-shake fa-lg"></i>
                </span>
                <input type="text" type="text" value="<?= $data1['amount']; ?>" id="payment_amount" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  disabled>
               
            </div>
             <div class='flex justify-center items-center'>
             <button id="pay_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-32  my-4 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pay</button>
             </div>
               
    
      </div>

</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            document.getElementById('pay_button').addEventListener('click', function(event) {
                event.preventDefault();
        
                // Get the amount from the input field
                var amount = document.getElementById('payment_amount').value;
        
                // Open the Razorpay checkout form
                var options = {
                    key: "rzp_test_L1baXUC1yU1dh8",
                    amount: amount * 100, // Amount in paisa
                    name: "Substring Technologies",
                    description: "Substring Training Payment for Selected Batch",
                    image: "",
                    "handler": function (response) {
                        var baseUrl = "<?= base_url() ?>";
                        var url = baseUrl + "payment/";
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url, true);
                        xhr.setRequestHeader("Content-Type", "application/json");
                       //  data to be sent
                        var data = {
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_order_id: response.razorpay_order_id,
                            razorpay_signature: response.razorpay_signature
                        };
                          

                        // Convert data to JSON 
                        xhr.send(JSON.stringify(data));
                        window.location.href = baseUrl + "success";

                        
                    },
                    
                    prefill: {
                        name: "Test",
                        email: "test@gmail.com"
                    },
                    theme: {
                        color: "#00008B"
                    }  
                };
        
                var razorpay = new Razorpay(options);
                razorpay.open();
            });
        </script>
<?= $this->endSection(); ?>