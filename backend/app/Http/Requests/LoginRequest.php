<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    // Validation rules for the request
    public function rules(): array
    {
        return [
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ];
    }
}
