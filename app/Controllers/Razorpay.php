<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\UserDetail;
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
                'student_name' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email|is_unique[user_details.email]',
                'phone_number' => 'required|numeric'
            ];
            if (!$this->validate($rules)) {
                // If validation fails, return to the form with errors
                $errors = $validation->getErrors();
                //var_dump($errors);
                 return redirect()->back()->withInput()->with('errors', $errors); 
                
            }
            $data = [
                'student_name' => $this->request->getPost('student_name'),
                'email' => $this->request->getPost('email'),
                'phone_number' => $this->request->getPost('phone_number'),
                'batch_id' => $this->request->getPost('batch_id'),
                'amount' => $this->request->getPost('amount')
            ];
           
           
            $student =new UserDetail();
    
            // $student->insert($data);
    
            // Redirect to a success page or do something else
            // return redirect()->back();
            return view('payment_page',['data' => $data]);
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
}
