<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserValidationRequest extends FormRequest
{

    /*
    public function authorize(): bool
    {
        return false;
    }
    */

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:50', 'min:10'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:5', 'max:20', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'The :attribute field must be filled',
            'max' => 'The :attribute field must not have more than :max characters.',
            'min' => 'The :attribute field must have at least :min characters.',
            'password.confirmed' => 'The passwords does not match.',
        ];
    }
}
