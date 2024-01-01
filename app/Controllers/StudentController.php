<?php

namespace App\Controllers;

use App\Models\UserDetail;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    protected $helpers = ['form','url'];
    public function join_student()
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
                'batch_id' => $this->request->getPost('batch_id')
            ];
            $student =new UserDetail();
    
            $student->insert($data);
    
            // Redirect to a success page or do something else
           
            return redirect()->back();
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
