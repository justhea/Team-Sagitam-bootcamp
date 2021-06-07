<?php

namespace App\Http\Controllers;

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
}
