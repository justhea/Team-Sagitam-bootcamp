<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Models\{
    Fileupload,
    User
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Datables;

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
        $users = User::all();

        $fileuploads = Fileupload::where('user_id', Auth::user()->id)
            ->limit(3)
            ->latest()
            ->get();

        return view('dashboard.profile', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent,
            'users' => $users,
            'fileuploads' => $fileuploads,
        ]);
    }

    public function editProfile()
    {
        $dashboardTitle = "Profile Edit";
        $isCurrent = "prodile edit";

        $user = User::where('id', Auth::user()->id)
            ->first();

        return view('dashboard.profile-edit', [
            'dashboardTitle' => $dashboardTitle,
            'isCurrent' => $isCurrent,
            'user' => $user,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = User::where('id', Auth::user()->id)
            ->first();

        $user->name = $request->get('name');
        $user->password = Hash::make($request->get('password'));
        $user->contact_no = $request->get('contact_no');
        $user->bdate = $request->get('bdate');

        $user->profile_image = $request->file('profile_image') ? Storage::disk('public')->put('images', $request->profile_image) : $user->profile_image;

        $user->save();

        return redirect(route('dashboard.profile'));
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
    
    public function delete(){
      $user = Auth::user();
        Auth::logout();
        
    
        if ($user->delete()) {
    
             return redirect(route('home.index'));
        }
    
    }
    
}
