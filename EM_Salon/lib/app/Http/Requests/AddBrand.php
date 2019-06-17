<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBrand extends FormRequest
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
            'brand_name' => 'unique:brands,brand_name|max:100',
            'brand_address' => 'max:255',
            'brand_phone'=>'max:11',
        ];
    }

    public function messages()
    {
        return [
            'brand_name.unique' => 'Tên chi nhánh đã tồn tại',
            'brand_name.max' => 'Tên chi nhánh không quá 100 kí tự',
            'brand_address.max' => 'Địa chỉ không quá 255 kí tự',
            'brand_phone.max' => 'SĐT không quá 11 kí tự',
        ];
    }
}
