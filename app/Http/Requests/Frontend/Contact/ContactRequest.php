<?php

namespace App\Http\Requests\Frontend\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "Doldurulması zorunlu alan",
            'email.required' => "Doldurulması zorunlu alan",
            'email.email' => "Girilen değer email tipinde olmalıdır",
            'message.required' => "Doldurulması zorunlu alan",
        ];
    }
}
