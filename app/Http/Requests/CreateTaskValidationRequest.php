<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskValidationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'task' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'The :attribute field must be filled',
        ];
    }
}
