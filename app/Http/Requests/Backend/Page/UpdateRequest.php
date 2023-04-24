<?php

namespace App\Http\Requests\Backend\Page;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Doldurulması zorunlu alan",
            'slug.required' => "Doldurulması zorunlu alan"
        ];
    }
}
