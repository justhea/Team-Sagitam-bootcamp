<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $dashboardTitle = "Dashboard";
        $isCurrent = "dashboard";

        return view('dashboard.index', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]
    );
    }
    public function profile()
    {
        $dashboardTitle = "Profile";
        $isCurrent = "Profile";
        return view('dashboard.profile', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]
    );
    }
    public function directory()
    {
        $dashboardTitle = "Directory";
        $isCurrent = "Directory";
        return view('dashboard.directory', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]
    );
    }
    public function journal()
    {
        $dashboardTitle = "Journal";
        $isCurrent = "Journal";
        return view('dashboard.directory', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]
    );
    }
}
