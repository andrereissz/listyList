<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'name' => ['alpha', 'max:50', 'min:10', 'required'],
            'email' => ['required'],
            'password' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name' => 'Invalid name.',
            'required' => 'The :attribute field must be filled.',
        ];
    }
}
