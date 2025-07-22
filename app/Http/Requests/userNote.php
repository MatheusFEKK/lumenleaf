<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userNote extends FormRequest
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
            'noteTitle' => ['required'],
            'noteDescription' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'noteTitle.required' => 'Note title is required',
            'noteDescription.required' => ['Note description is required']
        ];
    }
}
