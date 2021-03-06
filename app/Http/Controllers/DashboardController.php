<?php

namespace App\Http\Controllers;
use App\Models\User;
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
            'isCurrent' => $isCurrent,
            'users' => $users
        ]
    );
    }
    public function profile()
    {
        $dashboardTitle = "Profile";
        $isCurrent = "Profile";
        $users = User::all();
        return view('dashboard.profile', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent,
            'users' => $users
        ]
    );
    }
    public function directory()
    {
        $dashboardTitle = "Directory";
    $isCurrent = "Directory";
    $users = User::all();
    return view('dashboard.directory', [
        'dashboardTitle' => $dashboardTitle,
        'isCurrent' => $isCurrent,
        'users' => $users
    ]);
    }
    public function journal()
    {
        $dashboardTitle = "Journal";
        $isCurrent = "Journal";
        return view('dashboard.journal', [
                'dashboardTitle' => $dashboardTitle,
                'isCurrent' => $isCurrent
            ]
        );
    }
    public function files()
    {
        $dashboardTitle = "Files";
        $isCurrent = "Files";
        return view('dashboard.files', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]
    );
    }

    public function calendar()
    {
        $dashboardTitle = "Calendar";
        $isCurrent = "calenadr";

        return view('dashboard.calendar', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent
        ]
    );
    }
}
