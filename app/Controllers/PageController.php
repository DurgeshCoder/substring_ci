<?php

namespace App\Controllers;


class PageController extends BaseController
{


    public function index()
    {
        return view("page_view");
    }

    public function about()
    {
        return view("about_view");
    }


}