<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\UserModel;
use App\Models\BatchUser;
use Razorpay\Api\Api;

class Razorpay extends BaseController
{
    protected $helpers = ['form','url'];
    public function processPayment()
{
    helper(['form', 'url']);
    $validation = \Config\Services::validation();
    $db = \Config\Database::connect(); 

    try {
        $db->transStart(); // Start a transaction

        if ($this->request->is('post')) {
            
            $rules = [
                'user_name' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email|is_unique[user_details.email]',
                'phone_number' => 'required|numeric',
                'batch_id' => 'required',
            ];

            // if (!$this->validate($rules)) {
            //     // If validation fails, return to the form with errors
            //     $errors = $validation->getErrors();
            //     return redirect()->back()->withInput()->with('errors', $errors);
            // }

            $data1 = [
                'user_name' => $this->request->getPost('user_name'),
                'email' => $this->request->getPost('email'),
                'phone_number' => $this->request->getPost('phone_number'),
                'amount' => $this->request->getPost('amount')
            ];

            $user_model = new UserModel();
            $user_model->insert($data1);

            $user = $user_model->where('email', $data1['email'])->first();

            // Check if batch_id is not empty before proceeding with batch-related operations
            if (!empty($this->request->getPost('batch_id'))) {
                $data2 = [
                    'batch_id_fk' => $this->request->getPost('batch_id'),
                    'user_id_fk' => $user['user_id']
                ];

                $batch_user_model = new BatchUser();
                $batch_user_model->insert($data2);
            }
        }

        $db->transComplete(); // Complete the transaction

        if ($db->transStatus() === false) {
            throw new \Exception('Transaction failed');
        }

        // Redirect to a success page or do something else
        return view('payment_page', ['data1' => $data1]);
    } catch (\Exception $e) {
        // Handle the exception, log, or redirect with an error message
        $errorData = [
            'message' => 'Select one of the batch',
        ];
    
        return redirect()->back()->withInput()->with('errors', $errorData);
    }
}
    public function check_batch_id($batch_id)
        {
            if (empty($batch_id) || count($batch_id) == 0) {
                return false;
            }

            return true;
        }
   

    public function successPayment() {
       
        return view('success_page'); 
    }
}
