<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
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
            'description' => 'required|min:5|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'Please enter a description pleaseeeee',
            'description.min' => 'The description must be at least 5 characters.',
            'description.max' => 'The description may not be greater than 255 characters.',
        ];
    }
}
