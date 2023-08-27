<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\AuthService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    # For register form
    public function create(){
        return view('auth.register');
    }

    # For register action
    public function register(RegisterRequest $request, AuthService $service)
    {
        $validatedData = $request->validated();
        $service->register($request->validated());
        return redirect()->route('home');
    }
}
