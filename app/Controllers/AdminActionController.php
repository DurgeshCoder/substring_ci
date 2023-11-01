<?php

namespace App\Controllers;
use App\Models\TrainingCourses;
use App\Models\CoursesTopics;
use App\Models\SubTopics;


class AdminActionController extends BaseController{
    protected $helpers = ['form','url'];

    public function course_view($course_id = null) {
        $courses = new TrainingCourses();
        $course = $courses->where('course_id', $course_id)->first(); 

        // var_dump($course);
    
        return view('admin/course_view', ['course' => $course]);
         
    }

    public function edit_course($course_id=null){
        $course = new TrainingCourses();
        $data["course"]=$course->where('course_id',$course_id)->first();
        return view('admin/edit_course',$data);
  }

    public function update_course($course_id=null){
        $course = new TrainingCourses();


       

           $file = $this->request->getFile('cover_image');
           $image_name = null; 
            if ($file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $image_name = $file->getRandomName();
                    $file->move('cover_images/', $image_name);
                }
            }
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


     $course->update($course_id,$data);
     return redirect()->to(base_url('admin/training_coureses'))->with('status','Course Updated Successfully');
}

    
   
    
    

    public function delete_course($course_id=null){
       $course = new TrainingCourses();


       try {
        $topics_model = new CoursesTopics();
        $topics= $topics_model->where("subject_id",$course_id)->findAll();
        //var_dump($topics);

        if (!empty($topics)) {

            $data=[               
                'status'=>'Delete its Topics First',
                'status_text'=> 'Delete its Topics First',
                'status_type'=>'failed'
            ];
            return $this->response->setJSON($data);
        } else {
            // Delete the topic itself
            $deleted = $course->where("course_id",$course_id)->delete();

            if ($deleted) {
                 $data=[               
                    'status'=>200,
                    'status_text'=> 'Topic Deleted ',
                    'status_type'=>'success'
                ];
                return $this->response->setJSON($data);
               
            } else {
                // If there was an issue deleting the topic, redirect with an error message.
                return redirect()->to(base_url('admin/training_coureses'))->with('status', 'Failed to delete Topic');
            }
        }
    } catch (Exception $e) {
        // If an exception occurs, redirect with an error message.
        return redirect()->to(base_url('admin/training_coureses'))->with('status', 'Delete its SubTopics First');
    }
    }


   
    public function topic_view($topic_id = null) {
        $topics = new CoursesTopics();
        $topic = $topics->where('topic_id', $topic_id)->first(); 
    
        return view('admin/topic_view', ['topic' => $topic]);
         
    }
    public function edit_topic($topic_id=null){
        $topic = new CoursesTopics();
        $data["topic"]=$topic->where('topic_id',$topic_id)->first();
        return view('admin/edit_topic',$data);
  }
  public function update_topic($topic_id=null){
    $topic = new CoursesTopics();
    $data=[
        "topic_name"=>$this->request->getPost("topic_name"),
        "description"=>$this->request->getPost("description"),
        
            
];


 $topic->update($topic_id,$data);
 return redirect()->to(base_url('admin/topic'))->with('status','Topic Updated Successfully');
}





public function delete_topic($topic_id = null)
{
    $topic = new CoursesTopics();

    try {
        $subtopics_model = new SubTopics();
        $subtopics = $subtopics_model->where("topic_id", $topic_id)->findAll();

        if (!empty($subtopics)) {

            $data=[               
                'status'=>'Delete its SubTopics First',
                'status_text'=> 'Delete its SubTopics First',
                'status_type'=>'failed'
            ];
            return $this->response->setJSON($data);
        } else {
            // Delete the topic itself
            $deleted = $topic->where("topic_id", $topic_id)->delete();

            if ($deleted) {
                 $data=[               
                    'status'=>200,
                    'status_text'=> 'Topic Deleted ',
                    'status_type'=>'success'
                ];
                return $this->response->setJSON($data);
               
            } else {
                // If there was an issue deleting the topic, redirect with an error message.
                return redirect()->to(base_url('admin/topic'))->with('status', 'Failed to delete Topic');
            }
        }
    } catch (Exception $e) {
        // If an exception occurs, redirect with an error message.
        return redirect()->to(base_url('admin/topic'))->with('status', 'Delete its SubTopics First');
    }
}



    
   
   public function subtopic_view($subtopic_id = null) {
    $subtopics = new SubTopics();
    $subtopic = $subtopics->where('subtopic_id', $subtopic_id)->first(); 

    return view('admin/subtopic_view', ['subtopic' => $subtopic]);
     
}

public function edit_subtopic($subtopic_id=null){
    $subtopic = new SubTopics();
    $data["subtopic"]=$subtopic->where('subtopic_id',$subtopic_id)->first();
    return view('admin/edit_subtopic',$data);
}
public function update_subtopic($subtopic_id=null){
    $subtopic = new SubTopics();
    $data=[
        "subtopic_name"=>$this->request->getPost("subtopic_name"),
        "description"=>$this->request->getPost("description"),
    ];


 $subtopic->update($subtopic_id,$data);
 return redirect()->to(base_url('admin/sub_topic'))->with('status','Subtopic Updated Successfully');
}
    

public function delete_subtopic($subtopic_id=null){
    $subtopic = new SubTopics();   
    $deleted = $subtopic->where('subtopic_id', $subtopic_id)->delete();

            if ($deleted) {
                $data=[               
                'status'=>200,
                'status_text'=> 'Sub Topic Deleted ',
                'status_type'=>'success'
            ];
            return $this->response->setJSON($data);
            
   } else {
       // If there was an issue deleting the topic, redirect with an error message.
       return redirect()->to(base_url('admin/sub_topic'))->with('status', 'Failed to delete Topic');
   }
   
   }
}

