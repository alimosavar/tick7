<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class userRegisterRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام و نام خانوادگی خود را وارد کنید',
            'name.min' => 'فیلد نام و نام خانوادگی نمیتواند کمتر از 3 کاراکتر باشد',
            'email.email' => 'ایمیل شما معتبر نیست',
            'email.required' => 'ایمیل خود را وارد کنید',
            'email.unique' => 'این ایمیل قبلا ثبت شده است',
            'password.required' => 'پسورد خود را وارد کنید',
            'password.min' => 'فیلد پسورد نمیتواند کمتر از 3 کاراکتر باشد',
        ];
    }
}
