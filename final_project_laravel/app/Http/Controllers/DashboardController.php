<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $dashboardTitle = "Dashboard";

        return view('dashboard.index', [
            'dashboardTitle' => $dashboardTitle
        ]
    );
    }
    public function profile()
    {
        $dashboardTitle = "Profile";
        return view('dashboard.profile', [
            'dashboardTitle' => $dashboardTitle
        ]
    );
    }
    public function directory()
    {
        $dashboardTitle = "Directory";
        return view('dashboard.directory', [
            'dashboardTitle' => $dashboardTitle
        ]
    );
    }
}
