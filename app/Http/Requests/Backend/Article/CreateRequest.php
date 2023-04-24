<?php

namespace App\Http\Requests\Backend\Article;

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
            'title' => ['required', 'unique:articles'],
            'slug' => ['required', 'unique:articles'],
            'category_id' => ['required'],
            'content' => ['required', 'unique:pages']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Doldurulması zorunlu alan",
            'title.unique' => "Bu başlık mevcut",
            'slug.required' => "Doldurulması zorunlu alan",
            'slug.unique' => "Bu slug değeri mevcut",
            'category_id.required' => "Doldurulması zorunlu alan",
            'content.required' => "Doldurulması zorunlu alan",
            'content.unique' => "Bu makale içeriği mevcut"
        ];
    }
}
