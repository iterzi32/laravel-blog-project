<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'exists:admins'],
            'password' => ['required', 'min:4', 'max:8'],
        ];
    }


    public function messages(): array
    {
        return [
            "email.required" => "Doldurulması zorunlu alan.",
            "email.email" => "Girdiğiniz değer email tipinde olmalı",
            "email.exists" => "Girilen email değeri bulunamadı",
            "password.required" => "Doldurulması zorunlu alan.",
            "password.min" => "Şifre en az dört karakterden oluşmalıdır.",
            "password.max" => "şifre en fazla 8 karakterden oluşmalıdır",
        ];
    }
}
