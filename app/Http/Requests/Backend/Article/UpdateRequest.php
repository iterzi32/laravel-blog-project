<?php

namespace App\Http\Requests\Backend\Article;

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
            'slug' => ['required'],
            'category_id' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Doldurulması zorunlu alan",
            'slug.required' => "Doldurulması zorunlu alan",
            'category_id.required' => "Doldurulması zorunlu alan"
        ];
    }
}
