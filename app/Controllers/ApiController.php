<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TrainingCourses;
use App\Models\CoursesTopics;
use App\Models\SubTopics;
class ApiController extends ResourceController{
  

    // get all the courses
    public function get_all_courses(){

        $training_course_model=new TrainingCourses();
        $courses=$training_course_model->findAll();       
        return $this->respond($courses);
    }

    // get all topic of course
    public function get_topic_by_course_id($course_id=null)
    {
        $courses_topics_model=new CoursesTopics();
        $topics=$courses_topics_model->where("subject_id",$course_id)->findAll();
        return $this->respond($topics);
    }

    public function get_subtopic_by_topic_id($topic_id=null)
    {
        $subtopics_model=new SubTopics();
        $subtopics=$subtopics_model->where("topic_id",$topic_id)->findAll();
        return $this->respond($subtopics);

    }
   

}