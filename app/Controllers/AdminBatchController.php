<?php

namespace App\Controllers;
use App\Models\TrainingCourses;
use App\Models\BatchModel;

class AdminBatchController extends BaseController
{
    protected $helpers = ['form','url'];
   
    public function batches(){
        $models=new TrainingCourses();
        $coureses=$models->orderBy("course_id","desc")->findAll();
        return view('admin/view_batches',['coureses'=>$coureses]);
       
    }

    public function add_batch(){
        $validation = \Config\Services::validation();
        
        $models=new TrainingCourses();
        $coureses=$models->findAll();
        if ($this->request->is('get')){
            return view('admin/add_batch',['coureses'=>$coureses]);
           }
        else if ($this->request->is('post')){
            

            $rules = [
                'batch_name' => 'required|max_length[100]',
                'short_description' => 'required|max_length[10000]|min_length[10]',
                'long_description' => 'required|max_length[10000]|min_length[10]',
                'start_date' => 'required|max_length[100]|min_length[10]',
                'timing' => 'required|max_length[100]',
                'batch_status' => 'required|max_length[100]',
                'admission_status' => 'required|max_length[100]',
                'number_of_admissions' => 'required|max_length[10]',
                'instructor' => 'required|max_length[255]', 
                'message' => 'required|max_length[10000]|min_length[10]',
          ];

           
            
            if (! $this->validate($rules)) {
                $validation = \Config\Services::validation();
                // $error_msg['errors']=$this->validation->getErrors();
                return view('admin/add_batch',['coureses'=>$coureses]); 
                }

                    // Form data is valid, proceed with saving to the database
                $name = $this->request->getPost("batch_name");
                $short_description = $this->request->getPost("short_description");
                $long_description = $this->request->getPost("long_description");
                $sql_date = $this->request->getPost("start_date");
                $parts = explode("/", $sql_date); 
                    if (count($parts) == 3) {
                        $sql_date = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
                    }
                $timing = $this->request->getPost("timing");
                $batch_status = $this->request->getPost("batch_status");
                $admission_status = $this->request->getPost("admission_status");
                $admission_open = $this->request->getPost("admission_open");
                $number_of_admissions = $this->request->getPost("number_of_admissions");
                $instructor = $this->request->getPost("instructor");
                $message = $this->request->getPost("message");
                $course_id = $this->request->getPost("subject_id");
            
        
                // You can insert the data into the database here
                $data=[
                    "name"=>$name,
                    "short_description"=>$short_description,
                    "long_description"=>$long_description,
                    "start_date"=>$sql_date,
                    "timing"=>$timing,
                    "batch_status"=>$batch_status,
                    "admission_status"=>$admission_status,
                    "number_of_admissons"=>$number_of_admissions,
                    "instructor"=>$instructor,
                    "message"=>$message,
                    "course_id"=>$course_id,
                ];
                //var_dump($data);
                $model=new BatchModel();
                $model-> insert($data);
                        return redirect()->to(base_url('admin/add_batch'))->with('status','Batch Added Successfully');
               
                
            } 
    
            
        else{
                return redirect()->back()->withInput();
            }
           
    }
 
}
