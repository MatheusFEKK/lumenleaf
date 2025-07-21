<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegistration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'password_confirm' => ['required', 'same:password']
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'Your name is required',
            'email.required' => 'Your email is required',
            'email.email' => 'Insert a valid email',
            'password.required' => 'Password is required',
            'password_confirm.required' => 'Password is required',
            'password_confirm.same' => 'The passwords do not match',
        ];
    }
}
