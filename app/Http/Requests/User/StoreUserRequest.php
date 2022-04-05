<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:5|string',
            'email' => 'required|unique|email|min:6',
            'password' => 'required|same:confirm-password',
        ];
    }
}
