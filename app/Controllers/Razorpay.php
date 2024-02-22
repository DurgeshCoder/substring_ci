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
        if ($this->request->is('post')){
            $rules =[
                'user_name' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email|is_unique[user_details.email]',
                'phone_number' => 'required|numeric'
            ];
            if (!$this->validate($rules)) {
                // If validation fails, return to the form with errors
                $errors = $validation->getErrors();
                //var_dump($errors);
                 return redirect()->back()->withInput()->with('errors', $errors); 
                
            }
            $data1 = [
                'user_name' => $this->request->getPost('user_name'),
                'email' => $this->request->getPost('email'),
                'phone_number' => $this->request->getPost('phone_number'),
                'amount' => $this->request->getPost('amount')
            ];
           
           
            $user_model =new UserModel();
    
            $user_model->insert($data1);


            $user = $user_model->where('email', $data1['email'])->first();
            $data2 =[
                'batch_id_fk' => $this->request->getPost('batch_id'),
                'user_id_fk' => $user['user_id']
            ];
            $batch_user_model =new BatchUser();
    
            $batch_user_model->insert($data2);
    
            // Redirect to a success page or do something else
            // return redirect()->back();
            // var_dump($data1);
            // var_dump($data2);
            return view('payment_page',['data1' => $data1]);
        }  
        
        // //Input items of form
        // $input = $this->request->getVar();
        // //get API Configuration
        // $api = new Api(env('razorKey'), env('razorSecret'));
        // //Fetch payment information by razorpay_payment_id
        // $payment = $api->payment->fetch($input['razorpay_payment_id']);

        // if (count($input) && !empty($input['razorpay_payment_id'])) {
        //     try {

        //         $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

        //     } catch (\Exception $e) {
        //         return $e->getMessage();
        //         session()->setFlashdata("error", $e->getMessage());
        //         return redirect()->back();
        //     }
           

        //     // save transaction details
        //     $trnx = new TransactionModel();

        //     $trnx->insert([
        //         "amount" => $response->amount,
        //         "currency" => $response->currency,
        //         "trnx_id" => $response->id,
        //         "card_id" => $response->card_id,
        //         "status" => $response->status,
        //     ]);
        // }
        
        // return redirect()->back();
    }

    public function successPayment() {
        // Your logic for handling the successful payment callback
        // You can use $trainingId to identify and process the training
        return view('success_page'); // Assuming your view file is named success_page.php
    }
}
