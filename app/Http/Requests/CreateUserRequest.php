<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'=>'required|min:3|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|max:255'
        ];
    }
    public function message(){
        return[
            'name.required'=>"Ad Alanı Boş",
            'name.string'=>"Ad Alanı String olmalı",
            'name.min'=>"Minimum 3 karakter olmalı",
            'name.max'=>"Maksimum 255 karaktrer olmalı",
            'email.required'=>"Email yaz lale",
            'email.email'=>"Email, email formatında olmalı xxx@bilmemne.com",
            'email.unique'=>"Bu email mevcut",
            'password.required'=>"Şifre alanını boş bırakma enayi",
            'password.string'=>"Şifreyi klavyedeki tuşlara basarak gir amk",
            'password.min'=>"Şifre minimum 6 karakterden oluşmalı sonra hesabı gaptırdım diye ağlama bana",
            'password.max'=>"Tamam birader abartma amk pentagonda mı çalışıyosun.",
        ];
    }
}
