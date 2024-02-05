<?php

namespace App\Controllers;
use App\Models\TrainingCourses;
use App\Models\BatchModel;

class AdminBatchController extends BaseController
{
    protected $helpers = ['form','url'];
   
    public function batches(){
        $batch_models=new BatchModel();
        $batches=$batch_models->orderBy("batch_id","short_description")->findAll();
        $data['courses'] = [];
        $data['load_admin_js'] = true;
        $viewData = array_merge($data, ['batches' => $batches]);
        //var_dump($data);
        return view('admin/view_batches',$viewData);
       
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

    public function batch_view($batch_id = null) {
        $batches=new BatchModel();
        $batch = $batches->where('batch_id', $batch_id)->first(); 
    
        return view('admin/detail_batch_view', ['batch' => $batch]);
 
     }

     public function edit_batch($batch_id=null){
        $batch =new BatchModel();
        $data["batch"]=$batch->where('batch_id',$batch_id)->first();
        return view('admin/edit_batch',$data);
    }

    public function update_batch($batch_id=null){
        $batch =new BatchModel();


        $name = $this->request->getPost("batch_name");
        $short_description = $this->request->getPost("short_description");
        $long_description = $this->request->getPost("long_description");
        $start_date = $this->request->getPost("start_date");
        $old_start_date = $this->request->getPost("old_start_date");
         if(!empty($start_date)){
            $parts = explode("/", $start_date); 
            if (count($parts) == 3) {
                $sql_date = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
            }
         }
         else
         {
            $sql_date=$old_start_date;
         }
        $timing = $this->request->getPost("timing");
        $batch_status = $this->request->getPost("batch_status");
        $admission_status = $this->request->getPost("admission_status");
        $number_of_admissions = $this->request->getPost("number_of_admissions");
        $instructor = $this->request->getPost("instructor");
        $message = $this->request->getPost("message");
        
         

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
        ];


        $batch->update($batch_id,$data);
        return redirect()->to(base_url('admin/batches'))->with('status','Batch Updated Successfully');
    }

        public function delete_batch($batch_id=null){
            $batch =new BatchModel();   
            $deleted = $batch->where('batch_id', $batch_id)->delete();

                    if ($deleted) {
                        $data=[               
                        'status'=>200,
                        'status_text'=> 'Batch Deleted ',
                        'status_type'=>'success'
                    ];
                    return $this->response->setJSON($data);
                    
        } else {
            // If there was an issue deleting the topic, redirect with an error message.
            return redirect()->to(base_url('admin/batches'))->with('status', 'Failed to Batch');
        }
        
        }
}