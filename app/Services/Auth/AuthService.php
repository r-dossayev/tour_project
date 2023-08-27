<?php

namespace App\Services\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DateTime;

class AuthService
{
    public function register($validated)
    {
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        $user->roles()->attach(['role_id' => Role::$USER]);

        Auth::login($user);
    }


}