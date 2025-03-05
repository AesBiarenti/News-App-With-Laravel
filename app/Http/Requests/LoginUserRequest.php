<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|string'
        ];
    }
    public function messages(){
        return [
            'email.required'=>'email alanını boş bırakma aslan',
            'email.email'=>'email alanını uyguna formatta gir xxx@bilmemne.com',
            'password.required'=>'password alanını boş bırakma aslan',
            'password.string'=>'password alanını uygun formatta gir.'
        ];
    }
}
