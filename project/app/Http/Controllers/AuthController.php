<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()){
                return redirect()->route('home');
            }
             else {
                return view('login')->with('message', 'Email ou password incorrect ! veillez reessayer');
            }
        }
        return view('login')->with('message', 'Email ou password incorrect ! veillez reessayer');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // public function login_form()
    // {
    //     return view('login');
    // }
}
