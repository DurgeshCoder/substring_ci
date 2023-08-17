<?php

namespace App\Controllers;


use App\Models\Emp;

class PageController extends BaseController
{


    public function index(): string
    {
        return view("page_view");
    }

    public function about(): string
    {
        $data = ["friends" => [

            new Emp(12, "Gautam", "215235", "Lucknow"),
            new Emp(13, "Ankit", "215235", "Lucknow"),
            new Emp(14, "Uttam", "215235", "Lucknow"),
            new Emp(15, "Durgesh", "215235", "Lucknow"),

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

    public function testing(): string
    {
        return view("test");
    }

}