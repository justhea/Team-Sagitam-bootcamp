<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function signin()
  {
    return view('register', [
      'register' => true
    ]);
  }

  public function register(Request $request)
  {
    // Laravel Eloquent
    $user = User::where('email', $request->get('email'))->first();
    if ($user) {
      // if user / email exists
      return view('register', [
        'register' => false
      ]);
    } else {
      // create user
      User::create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => Hash::make($request->get('password')),
        'user_type' => 'user',
        'bdate' => $request->get('bdate'),
        'contact_no' => '',
        'profile_image' => 'http://localhost:8000/storage/images/default.jpg',
        //...
      ]);
  
      return redirect(route('login.login', ['registration' => 1]));
    }
  }
}
