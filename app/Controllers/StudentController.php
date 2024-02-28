<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BatchUser;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    protected $helpers = ['form','url'];
    public function join_student()
    {   
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $db = \Config\Database::connect(); 

        try {
            $db->transStart(); 

        if ($this->request->is('post')){
            $rules =[
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
            ];

            $user_model =new UserModel();
    
            $user_model->insert($data1);

            $user = $user_model->where('email', $data1['email'])->first();
            if (!empty($this->request->getPost('batch_id'))) {
                $data2 = [
                    'batch_id_fk' => $this->request->getPost('batch_id'),
                    'user_id_fk' => $user['user_id']
                ];

                $batch_user_model = new BatchUser();
                $batch_user_model->insert($data2);
            }
        }
        $db->transComplete(); 
        if ($db->transStatus() === false) {
            throw new \Exception('Transaction failed');
        }
    
            // Redirect to a success page or do something else
            $success = 'You are joined successfully!';
            return redirect()->back()->withInput()->with('success', $success);
        } catch (\Exception $e) {
            // Handle the exception, log, or redirect with an error message
            $errorData = [
                'message' => 'Select one of the batch',
            ];
        
            return redirect()->back()->withInput()->with('errors', $errorData);
        }
        
        
        

       
    }
    // public function create_order()
    //     {
    //         // Check if it's a POST request
    //         if ($this->request->isAJAX() && $this->request->getMethod() === 'post') {
    //             // Get post data
    //             // $amount = $this->input->post('amount');
    //             // $info = $this->input->post('info');
    //             $amount = $this->request->getPost('amount');
    //             $info = $this->request->getPost('info');

    //             // Your logic for handling the POST request and creating an order goes here
    //             echo 'Amount: ' . $amount . ', Info: ' . $info;
    //             error_log('Received data: ' . print_r([$amount, $info], true));

    //             error_log('This is a test - Amount: ' . $amount . ', Info: ' . $info);
    //             print_r('This is a test');
    //             var_dump($amount, $info);

    //             // Example: Perform some actions with the data
    //             // ...
                

    //             // Example: Return a response
    //             $response = [
    //                 'status' => 'success',
    //                 'message' => 'Order created successfully!',
    //             ];

    //             return $this->response->setJSON($response);
    //         } else {
    //             // Handle non-POST requests (optional)
    //             return redirect()->to(site_url());
    //         }
    //    }
    
}
