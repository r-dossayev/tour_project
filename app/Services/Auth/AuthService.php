<?php

namespace App\Services\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DateTime;
use Illuminate\Support\Facades\Mail;

class AuthService
{
    public function register($validated)
    {
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
//        Mail::to($user->email)->send( ));
            event(new Registered($user));
        $user->roles()->attach(['role_id' => Role::$USER]);

        Auth::login($user);
    }


}
