<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUser extends FormRequest
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
            'email' => 'unique:users,email',
            'phone' => 'unique:users,phone',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => "Email đã tồn tại",
            'phone.unique' => "Số điện thoại đã tồn tại",
        ];
    }
}
