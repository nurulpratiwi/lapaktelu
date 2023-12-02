<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            "username"=>"required | string |min:6",
            "email"=> "required | string | max:255 | email | unique:users",
            "password"=> "required | min:6 | string | regex:regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/"
        ];
    }

    public function messages(): array
    {
        return [
            "username.required"=> "Username harus memiliki minimal 6 karakter",
            "email.required"=> "Email harus diisi",
            "password.required"=> "Password harus mengandung 6 karakter terdiri dari huruf besar, kecil dan simbol"
        ];
    }
}
