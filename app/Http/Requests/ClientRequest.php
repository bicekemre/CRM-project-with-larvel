<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'sometimes|numeric',
            'email' => 'required|email|unique:users',
            'address' => 'sometimes|string|max:255',
            'type' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'This area is required.',
            'email.required' => 'This area is required.',
            'phone.numeric' => 'This area is must be numeric',
            'type.required' => 'This area is required.',
        ];
    }
}
