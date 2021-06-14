<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $loginTitle = "Login";
        return view('login',
        [
            'loginTitle' => $loginTitle
        ]
    );

    }

    public function auth(Request $request)
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($credentials)) {
            return redirect(route('dashboard.dashboard'));
        } else {
            // login.php?param1=123&param2=456
            return redirect(
                route('login.login', ['auth' => 0])
            );
        }
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect(route('home.index'));
    }
}
