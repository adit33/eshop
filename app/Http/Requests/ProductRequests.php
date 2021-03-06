<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequests;

class ProductRequests extends FormRequests
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
            'nama'=>'required',
            'harga'=>'required'

        ];
    }

    public function messages(){
        return [
            'nama.required'=>'Nama Barang Harus di isi',
            'harga.required'=>'Harga harus di isi'
        ];
    }
}
