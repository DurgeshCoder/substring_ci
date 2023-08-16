<?php

namespace App\Controllers;


use App\Models\User;

class PageController extends BaseController
{


    public function index(): string
    {
        return view("page_view");
    }

    public function about(): string
    {
        $data = ["friends" => [

            new User(12, "Gautam", "215235", "Lucknow"),
            new User(13, "Ankit", "215235", "Lucknow"),
            new User(14, "Uttam", "215235", "Lucknow"),
            new User(15, "Durgesh", "215235", "Lucknow"),

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


}