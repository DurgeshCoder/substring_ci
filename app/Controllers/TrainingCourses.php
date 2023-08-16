<?php

namespace App\Controllers;

use App\Models\TrainingCourseModel;
use CodeIgniter\RESTful\ResourceController;

class  TrainingCourses extends ResourceController
{


    //get the training courses
    public function index()
    {
        $trainingCourseModel = new TrainingCourseModel();
        $trainingCourses = $trainingCourseModel->findAll();
        return $this->respond($trainingCourses);
    }

    public function create(): \CodeIgniter\HTTP\ResponseInterface
    {
        $trainingCourseModel = new \App\Models\TrainingCourseModel();
        $data = [
            "title" => $this->request->getVar('title'),
            "short_description" => $this->request->getVar("short_description"),
            "long_description" => $this->request->getVar("long_description"),
            "fee" => $this->request->getVar("fee"),
            "discounted_fee" => $this->request->getVar("discounted_fee"),
            "mode" => $this->request->getVar("mode"),
            "coverImage" => $this->request->getVar("coverImage"),
            "certificate_url" => $this->request->getVar("certificate_url"),
            "duration" => $this->request->getVar("duration"),
            "admission_open" => $this->request->getVar("admission_open"),
            "start_date" => $this->request->getVar("start_date"),
        ];
        $trainingCourseModel = new TrainingCourseModel();
        try {
            $data = $trainingCourseModel->insert($data);
            //var_dump($data);
            return $this->respondCreated([
                "message" => "Course is added successfully !!"
            ]);
        } catch (\ReflectionException $e) {
            return $this->respond(["message" => $e->getMessage()], 401);

        }


    }


    public function show($id = null)
    {
        $trainingCourseModel = new TrainingCourseModel();
        $course = $trainingCourseModel->find($id);
        return $this->respond($course);
    }


    //delete the  course
    public function delete($id = null)
    {
        $trainingCourseModel = new TrainingCourseModel();
        $data = $trainingCourseModel->find("$id");
        if ($data) {
            $trainingCourseModel->delete($id);
            return $this->respond(["message" => "Course deleted"]);
        } else {
            return $this->failNotFound("No Course found !!");
        }
    }

}