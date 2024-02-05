<?php



namespace App\Controllers;
use App\Models\TrainingCourses;
use App\Models\CoursesTopics;
use App\Models\SubTopics;



class AdminController extends BaseController
{
    protected $helpers = ['form','url'];
   
    public function login()
    {
        if ($this->request->is('get')) {
            return view('admin/login');
        }
        else if ($this->request->is('post')){

            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            $session = session();
                if ($username === 'ashu' && $password === '123') {
                    $user = [
                        'username' => $username,
                        'password' => $password,
                        'loginned'=>'loginned'
                    ];
                    $session->set($user);
                     return  redirect()->to(base_url('/admin/dashboard'));
                   
            }  
             elseif ($username === 'admin' && $password === '7412') {
                $user = [
                    'username' => $username,
                    'password' => $password,
                    'loginned'=>'loginned'
                ];
                $session->set($user);
                 return  redirect()->to(base_url('/admin/dashboard'));
             }
            
            else {
                   
                 return redirect()->route('login')->with('status', 'Username or password is incorrect');

                    
            }
        }

        }
       
    

    public function logout()
    {
        $session = session();
        session_unset();
        $session->destroy();
        return  redirect()->to(base_url('/'));;
    }



 



    public function training_coureses(){
        $models=new TrainingCourses();
        $coureses=$models->orderBy("course_id","desc")->findAll();
        return view('admin/training_coureses',['coureses'=>$coureses]);
       
    }



    public function add_coureses() {
        $validation = \Config\Services::validation();
        
        // Handle GET request
        if ($this->request->is('get')) {
            return view('admin/add_coureses'); 
        }
        
        // Handle POST request
        if ($this->request->is('post')) {
            $rules = [
                'course_name' => 'required|max_length[100]',
                'short_description' => 'required|max_length[10000]|min_length[10]',
                'long_description' => 'required|max_length[10000]|min_length[10]',
                'fee' => 'required|max_length[10]',
                'discounted_fee' => 'required|max_length[10]',
                'mode' => 'required|max_length[50]',
                //  'cover_image' => 'uploaded[cover_image]|is_image[cover_image]|mime_in[cover_image,.jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[cover_image,100]|max_dims[cover_image,1024,768]',
                'duration' => 'required|max_length[100]',
                'admission_open' => 'required|max_length[10]',
                'start_date' => 'required|max_length[100]|min_length[10]',
                'rating' => 'required|max_length[255]', 
                'instructor' => 'required|max_length[255]', 
                'coureses_resourses' => 'required|max_length[255]',
            ];

           
            
            if (! $this->validate($rules)) {
                // $error_msg['errors']=$this->validation->getErrors();
               
                return view('admin/add_coureses'); 
            } 

            $file =$this->request->getFile('cover_image');
            if($file->isValid() && ! $file->hasMoved())
            {
                $image_name=$file->getRandomName();
                $file->move('cover_images/',$image_name);
            }
    
            // Form data is valid, proceed with saving to the database
            $course_name = $this->request->getPost("course_name");
            $short_description = $this->request->getPost("short_description");
            $long_description = $this->request->getPost("long_description");
            $fee = $this->request->getPost("fee");
            $discounted_fee = $this->request->getPost("discounted_fee");
            $mode = $this->request->getPost("mode");
            $duration = $this->request->getPost("duration");
            $admission_open = $this->request->getPost("admission_open");
            $start_date = $this->request->getPost("start_date");
                $parts = explode("/", $start_date); 
                if (count($parts) == 3) {
                    $sql_date = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
                }
            $rating = $this->request->getPost("rating");
            $slug = strtolower(trim(str_replace(' ', '-', $course_name)));
            $instructor = $this->request->getPost("instructor");
            $coureses_resourses = $this->request->getPost("coureses_resourses");
            
    
            // You can insert the data into the database here
            $data=[
                "name"=>$course_name,
                "short_description"=>$short_description,
                "long_description"=>$long_description,
                "fee"=>$fee,
                "discounted_fee"=>$discounted_fee,
                "mode"=>$mode,
                "cover_image"=>$image_name,
                "duration"=>$duration,
                "admission_open"=>$admission_open,
                "start_date"=>$sql_date,
                "rating"=>$rating,
                "slug"=>$slug,
                "instructor"=>$instructor,
                "course_resourses"=>$coureses_resourses,
            ];
            //var_dump($data);
            $model=new TrainingCourses();
            $model-> insert($data);
            return redirect()->to(base_url('admin/add_coureses'))->with('status','Course Added Successfully');
        }
    }
    



    public function topic(){
        $models=new CoursesTopics();
        $topics=$models->orderBy("topic_id","desc")->findAll();
        $data['courses'] = [];
        $data['load_admin_js'] = true; 
        $viewData = array_merge($data, ['topics' => $topics]);
        //var_dump($data);
        return view('admin/topic', $viewData);
        
       
       
    }
    public function add_topic(){
        $models=new TrainingCourses();
        $coureses=$models->findAll();
        if ($this->request->is('get')){
            return view('admin/add_topic',['coureses'=>$coureses]);
           }
        else if ($this->request->is('post')){
            

                    $i=1;
                    while (true) {

                        $subject_id=$this->request->getVar("subject_id");
                        $topic_name=$this->request->getVar("topic_name".$i);
                        $description=$this->request->getVar("description".$i);
                        if (isset($topic_name)) {
                            $data1=[
                            "subject_id"=>$subject_id,
                            "topic_name"=>$topic_name,
                            "description"=>$description,];
                            $model=new CoursesTopics();
                            $model-> insert($data1);
                        } else {
                           break;
                        }
                        $i++;  
                    }
                    
                    //return view('admin/topic',['coureses'=>$coureses]);
                    return redirect()->to(base_url('admin/add_topic'))->with('status','Topic Added Successfully');
                }
        else{
                return redirect()->back()->withInput();
            }
           
    }
    public function sub_topic(){
        $models=new SubTopics();
        $sub_topics=$models->orderBy("subtopic_id","desc")->findAll();
        $data['topics'] = [];
        $data['load_admin_js'] = true; 
        
        $viewData = array_merge($data, ['sub_topics'=>$sub_topics]);
        
    
        return view('admin/sub_topic',$viewData);
    }



    public function add_subtopic(){    

        if ($this->request->is('get')){
            $data['courses']=[];
            $data['load_admin_js']=true;
            return view('admin/add_subtopic',$data);
           }  
        else if ($this->request->is('post')){
            


                    $i=1;
                    while (true) {

                        $subject_id=$this->request->getVar("subject_id");
                        $topic_id=$this->request->getVar("topic_id");
                        $subtopic_name=$this->request->getVar("subtopic_name".$i);
                        $description=$this->request->getVar("description".$i);
                        if (isset($subtopic_name)) {
                            $data=[
                                "subject_id"=>$subject_id,
                                "topic_id"=>$topic_id,
                                "subtopic_name"=>$subtopic_name,
                                "description"=>$description,];
                            $model=new SubTopics();
                            $model-> insert($data);
                        } else {
                           break;
                        }
                        $i++;  
                    }
                    
                    //var_dump($data);
                    //$model=new SubTopics();
                    //$model-> insert($data);
        
                    //echo 'user register succesfully';
                    //return view('admin/add_subtopic',$data);
                    return redirect()->to(base_url('admin/add_subtopic'))->with('status','Sub Topic Added Successfully');
                }
        else{
                return redirect()->back()->withInput();
            }
        //return view('admin/add_subtopic');
    }

    // dashboard admin route

    public function dashboard(){
        return view('admin/admin_content');
    }

}
