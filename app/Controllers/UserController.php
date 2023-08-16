<?php

namespace App\Controllers;

use App\Entities\User;
use App\Models\UserModal;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{

    public function index()
    {
        $userModel = new UserModal();
        $users = $userModel->findAll();
        return $this->respond($users);
    }

    public function create()
    {

        $userModel = new UserModal();

        $data = [
            "name" => $this->request->getVar('name'),
            "email" => $this->request->getVar('phone'),
            "about" => $this->request->getVar('about'),
            "city" => $this->request->getVar('city'),

        ];

        try {
            $userModel->insert($data);

            return $this->respond([
                "message" => "created"
            ]);

        } catch (\ReflectionException $e) {
        }


    }


}