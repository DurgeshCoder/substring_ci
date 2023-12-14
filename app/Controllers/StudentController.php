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
            return view('joined_student');
        }
        
        
        

       
    }
    
}
