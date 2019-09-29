<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
            'phone' => 'required|unique:employee|numeric|min:10',
            'name' => 'required|alphabet',
            'dob' => 'required',
            'identity_number' => 'required|min:9|numeric',
            'email' => 'required|email|unique:employee',
            'address' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Bat buoc nhap so dien thoai',
            'name.required' => 'Bat buoc nhap ten',
            'dob.required' => 'Bat buoc nhap ngay sinh',
            'identity_number.required' => 'Bat buoc nhap so CMND',
            'email.required' => 'Bat buoc nhap email',
            'address.required' => 'Bat buoc nhap dia chi'
        ];
    }
}
