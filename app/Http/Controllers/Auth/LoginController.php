<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // login view for user
    public function create()
    {
        return view('auth.login');
    }

    // login to site logic for user
    public function login(LoginRequest $request){
        if(Auth::check()){
            return redirect()->intended('index');
        }
        if (Auth::attempt($request->validated())) {
            return redirect()->intended('/');
        }
        return back()->withErrors('Incorrect email or password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');
    }
}
