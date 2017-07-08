<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|unique',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'

        ];
    }

    public function messages(){
        return [
            'name.required'=>'Nama Harus di isi',
            'email.required'=>'Email harus di isi',
            'password.required'=>'Password harus di isi',
            'password.confirmed'=>'Password Tidak sama'
        ];
    }
}
