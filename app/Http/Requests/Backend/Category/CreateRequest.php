<?php

namespace App\Http\Requests\Backend\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'unique:categories'],
            'slug' => ['required', 'unique:categories']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Doldurulması zorunlu alan",
            'title.unique' => "Bu kategori mevcut",
            'slug.required' => "Doldurulması zorunlu alan",
            'slug.unique' => "Bu slug değeri mevcut"
        ];
    }
}
