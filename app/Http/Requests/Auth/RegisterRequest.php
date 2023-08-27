<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required | string | max: 255',
            'phone_number' => 'string | max: 12',
            'email' => 'required | email | max: 255 | unique:users',
            'password' => 'required | min: 6 | confirmed',
        ];
    }
}