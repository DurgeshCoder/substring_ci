<?php

namespace App\Controllers;


use App\Models\Emp;
use App\Models\TrainingCourses;
use App\Models\CoursesTopics;
use App\Models\SubTopics;
$db      = \Config\Database::connect();


class PageController extends BaseController
{


    public function index(): string
    {


        $data['teams'] = [
            [
                "name" => "Mr M.P. Tiwari",
                "position" => "Director",
                "about" => "The Director of our esteemed software company is a visionary leader who embodies a deep passion for technology and a relentless pursuit of excellence.",
                "linkedin_url" => "",
                "instagram_url" => "",
                "facebook_url" => "",
                "picture_url" => "static/img/team/director_sir.svg"


            ], [
                "name" => "Mr. Durgesh Tiwari",
                "position" => "CEO and Manager",
                "about" => "Durgesh Sir is a fun loving, entertaining personality famous over the internet for his teaching style and knowledge in various technologies.",
                "linkedin_url" => "",
                "instagram_url" => "",
                "facebook_url" => "",
                "picture_url" => "static/img/team/dktiwari.svg"


            ], [
                "name" => "Gautam Shukla",
                "position" => "Web Developer & Video Editor",
                "about" => "Edits and produces video content for a variety of platforms, including social media, websites, and television.",
                "linkedin_url" => "",
                "instagram_url" => "",
                "facebook_url" => "",
                "picture_url" => "static/img/team/gkshukla.svg"


            ], [
                "name" => "Ashutosh Sharma",
                "position" => "Web Developer",
                "about" => "Develops and maintains websites using a variety of programming languages and technologies.",
                "linkedin_url" => "",
                "instagram_url" => "",
                "facebook_url" => "",
                "picture_url" => "static/img/team/Ashutosh.jpg"


            ],
        ];

//        testimonial data

        $data['testimonials'] = [
            [
                "content" => "I enrolled in Substring Technologies for a software training course, and I must say it was a game-changer for me. The instructors were incredibly knowledgeable and supportive, making complex concepts easy to understand. Not only did I gain valuable skills, but the hands-on experience and practical projects helped me land a great job in the software industry. Substring Technologies truly delivers what they promise!",
                "name" => "Ankit Tiwari",
                "start" => 5,
                "position" => "Spring Boot Batch Student",
                "picture_url" => "default.png"
            ], [
                "content" => "I had the pleasure of learning web and mobile app development at Substring Technologies. The curriculum was well-structured, and the instructors were patient and attentive to every student's needs. The real-world projects allowed me to apply my knowledge effectively. Thanks to Substring Technologies, I am now confidently developing applications for clients and pursuing a successful career in the tech field.",
                "name" => "Atul Tiwari",
                "start" => 5,
                "position" => "FullStack Batch Student",
                "picture_url" => "default.png"
            ], [
                "content" => "Substring Technologies exceeded my expectations in providing top-notch software training. The trainers possessed deep industry insights and were adept at explaining complex coding concepts. Their dedication to student success was evident in the way they provided one-on-one guidance. I not only gained the skills I needed but also made valuable industry connections through their network. I highly recommend Substring Technologies!",
                "name" => "Karan Singh",
                "start" => 5,
                "position" => "Python Batch",
                "picture_url" => "default.png"
            ], [
                "content" => "I am immensely grateful to Substring Technologies for transforming me into a proficient web and mobile app developer. The hands-on training and interactive sessions made learning enjoyable. The trainers at Substring Technologies fostered a collaborative learning environment that encouraged creativity and innovation. Today, I am confidently working on various app development projects, all thanks to the comprehensive training I received from Substring Technologies.",
                "name" => "Ravi Shukla",
                "start" => 5,
                "position" => "Client",
                "picture_url" => "default.png"
            ],
            [
                "content" => "I enrolled in Substring Technologies for a software training course, and I must say it was a game-changer for me. The instructors were incredibly knowledgeable and supportive, making complex concepts easy to understand. Not only did I gain valuable skills, but the hands-on experience and practical projects helped me land a great job in the software industry. Substring Technologies truly delivers what they promise!",
                "name" => "Ankit Tiwari",
                "start" => 5,
                "position" => "Spring Boot Batch Student",
                "picture_url" => "default.png"
            ], [
                "content" => "I had the pleasure of learning web and mobile app development at Substring Technologies. The curriculum was well-structured, and the instructors were patient and attentive to every student's needs. The real-world projects allowed me to apply my knowledge effectively. Thanks to Substring Technologies, I am now confidently developing applications for clients and pursuing a successful career in the tech field.",
                "name" => "Atul Tiwari",
                "start" => 5,
                "position" => "FullStack Batch Student",
                "picture_url" => "default.png"
            ], [
                "content" => "Substring Technologies exceeded my expectations in providing top-notch software training. The trainers possessed deep industry insights and were adept at explaining complex coding concepts. Their dedication to student success was evident in the way they provided one-on-one guidance. I not only gained the skills I needed but also made valuable industry connections through their network. I highly recommend Substring Technologies!",
                "name" => "Karan Singh",
                "start" => 5,
                "position" => "Python Batch",
                "picture_url" => "default.png"
            ], [
                "content" => "I am immensely grateful to Substring Technologies for transforming me into a proficient web and mobile app developer. The hands-on training and interactive sessions made learning enjoyable. The trainers at Substring Technologies fostered a collaborative learning environment that encouraged creativity and innovation. Today, I am confidently working on various app development projects, all thanks to the comprehensive training I received from Substring Technologies.",
                "name" => "Ravi Shukla",
                "start" => 5,
                "position" => "Client",
                "picture_url" => "default.png"
            ],

        ];

        $data['client_photos'] = [
            [
                'picture_url' => 'static/img/clients/tcs_client_1.png'
            ], [
                'picture_url' => 'static/img/clients/infy_client_2.png'
            ], [
                'picture_url' => 'static/img/clients/nokia.png'
            ], [
                'picture_url' => 'static/img/clients/amazon.png'
            ], [
                'picture_url' => 'static/img/clients/google.png'
            ], [
                'picture_url' => 'static/img/clients/impressico.png'
            ],
        ];


        return view("page_view", $data);
    }

    public function about(): string
    {
        $data = ["friends" => [

            // new Emp(12, "Gautam", "215235", "Lucknow"),
            // new Emp(13, "Ankit", "215235", "Lucknow"),
            // new Emp(14, "Uttam", "215235", "Lucknow"),
            // new Emp(15, "Durgesh", "215235", "Lucknow"),

        ]];
        return view("about_view", $data);
    }

    public function services(): string
    {
        $data = ['pageTitle' => 'Services Title'];
        return view('services_view', $data);
    }


    public function contact(): string
    {
        return view("contact_view");
    }

    public function training(): string
    {
//        create object of modal : to perform operations with database
        $trainingModel = new TrainingCourses();
        $courses = $trainingModel->findAll();
        $data['courses'] = $courses;
        return view("training_view.php", $data);
    }
    
    public function course_view($slug) {
        $coursesModel = new \App\Models\TrainingCourses();
        $course = $coursesModel->where('slug', $slug)->first();
        $db = \Config\Database::connect();


        $builder = $db->table('training_courses');
        $builder->select('*');
        $builder->join('course_topics', 'course_topics.subject_id = training_courses.course_id');
        $builder->join('sub_topics', 'sub_topics.topic_id = course_topics.topic_id');
        $builder->where('course_id', $course['course_id']);
        $oldSubject = $builder->get()->getResult();

        $newData = array();
        $oldSubtopic = null;
        $oldSubjectIndex = -1;
        $ob = null;
        foreach ($oldSubject as $oldData) {
            if ($oldSubtopic == null) {
              // first subject topic
              $ob = [
                "subject" => $oldData->name, 
                "shortDescription" => $oldData->short_description,
                "longDescription" => $oldData->long_description,
                "topics" => array(
                  array(
                    "topic_id" => $oldData->topic_id,  
                    "topic" => $oldData->topic_name,
                    "topic_description" => $oldData->description,
                    "subtopicsArray" => array(
                      array(
                        "subtopic_id" => $oldData->subtopic_id, 
                        "subtopic_name" => $oldData->subtopic_name,
                        "subtopic_description" => $oldData->description,
                      ),
                    ),
                  ),
                ),
              ];
              $newData[] = $ob;
              $oldSubjectIndex += 1;
            } else {
              // second, third, fourth
              if ($oldSubtopic->name === $oldData->name) {
                $ind = -1;
                foreach ($newData[$oldSubjectIndex]["topics"] as $key => $t) {
                  if ($t["topic"] === $oldData->topic_name) {
                    $ind = $key;
                    break;
                  }
                }
        
                if ($ind >= 0) {
                  $newData[$oldSubjectIndex]["topics"][$ind]["subtopicsArray"][] = array(
                    "subtopic_id" => $oldData->subtopic_id, 
                    "subtopic_name" => $oldData->subtopic_name,
                    "subtopic_description" => $oldData->description,
                  );
                } else {
                  $newData[$oldSubjectIndex]["topics"][] = array(
                    "topic_id" => $oldData->topic_id,  
                    "topic" => $oldData->topic_name,
                    "topic_description" => $oldData->description,
                    "subtopicsArray" => array(
                      array(
                        "subtopic_id" => $oldData->subtopic_id, 
                        "subtopic_name" => $oldData->subtopic_name,
                        "subtopic_description" => $oldData->description,
                      ),
                    ),
                  );
                }
              } else {
                // different subject
                $ob = array(
                  "subject" => $oldData["name"],
                  "topics" => array(
                    array(
                      "topic_id" => $oldData->topic_id,  
                    "topic" => $oldData->topic_name,
                    "topic_description" => $oldData->description,
                    "subtopicsArray" => array(
                      array(
                        "subtopic_id" => $oldData->subtopic_id, 
                        "subtopic_name" => $oldData->subtopic_name,
                        "subtopic_description" => $oldData->description,
                      ),
                    ),
                    ),
                  ),
                );
                $newData[] = $ob;
                $oldSubjectIndex += 1;
              }
            }
        
            $oldSubtopic = $oldData;
          

        // $data = array();
        // $topics = array(); // Store unique topic names
        // $subtopicsData = array(); // Store subtopics data
        
        // foreach ($query as $row) {
        //     $topic_id = $row->topic_id;
        //     $topicName = $row->topic_name;
        //     $subtopicName = $row->subtopic_name;
        //     $topic_description = $row->description;
        //     $subtopic_description = $row->description;
        
        //     if (!isset($topics[$topicName])) {
        //         $topics[$topicName] = array(
        //             'topic_id' => $topic_id,
        //             'description' => $topic_description,
        //             'subtopics' => array(),
        //         );
        //     }
        
        //     $subtopicData = array(
        //         'subtopic_name' => $subtopicName,
        //         'description' => $subtopic_description,
        //     );
        
        //     $topics[$topicName]['subtopics'][] = $subtopicData;
        //     //var_dump($topics[$topicName]['subtopics']);
         
        }
        // return $newData;
           
        
        

        return view('course_view', ['course' => $course,'newData'=> $newData]);
        
        
    
}
    


//     public function course_view($slug) 
//     {       global $db;
// //        create object of modal : to perform operations with database
//             $courses = new TrainingCourses();
//             $course = $courses->where('slug', $slug)->first(); 
//             var_dump($course);
//             $builder = $db->table('training_courses');
//             $builder->select('*');
//             $builder->join('course_topics', 'course_topics.subject_id = training_courses.course_id');
//             $builder->join('sub_topics', 'sub_topics.topic_id = course_topics.topic_id');
//             $query = $builder->get();
//             // $this->db->select('*');
//             // $this->db->from('training_courses');
//             // $this->db->join('course_topics', 'training_courses.course_id = course_topics.subjec_id', 'inner');
//             // $this->db->join('sub_topics', 'course_topics.topic_id = sub_topics.=topic_id', 'inner');

//             // $query = $this->db->get();

//             if ($query->num_rows() > 0) {
//                 $data['results'] = $query->result();
//                 var_dump($data);
//             } else {
//                 $data['results'] = array(); // Empty array if no records found
//             }

//             // Load a view and pass the data to it
//             $this->load->view('course_view', $data);

//                     // return view('course_view', ['course' => $course]);
//             } 

}
