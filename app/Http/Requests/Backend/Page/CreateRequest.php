<?php

namespace App\Http\Requests\Backend\Page;

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
            'title' => ['required', 'unique:pages'],
            'slug' => ['required', 'unique:pages'],
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
            'content.required' => "Doldurulması zorunlu alan",
            'content.unique' => "Bu sayfa içeriği mevcut"
        ];
    }
}
