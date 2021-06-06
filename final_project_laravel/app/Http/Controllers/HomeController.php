<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";
        $isCurrent = "Home";

        return view('index', [
            'title' => $title,
            'isCurrent' => $isCurrent
        ]);
    }

    public function attorney()
    {
        $title = "Attorney";
        $isCurrent = "Attorney";

        return view('attorney', [
            'title' => $title,
            'isCurrent' => $isCurrent
        ]);
    }

    public function service()
    {
        $title = "Service";
        $isCurrent = "Service";

        return view('service', [
            'title' => $title,
            'isCurrent' => $isCurrent
        ]);
    }

    public function signup()
    {
        $title = "Signup";
        $isCurrent = "Signup"; 

        return view('signup', [
            'title' => $title,
            'isCurrent' => $isCurrent
        ]);
    }
}
