<?php

namespace App\Http\Requests\UserAdmin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required',
            'email' => 'email|required|unique:users,email',
            'pic' => 'image|mimes:jpeg,jpg,png|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام و نام خانوادگی خود را وارد کنید',
            'password.required' => 'پسورد خود را وارد کنید',
            'email.required' => 'ایمیل خود را وارد کنید',
            'email.unique' => 'این ایمیل قبلا ثبت شده است.',
            'pic.mimes' => 'پسوند عکس شما میتواند یکی از 3 مورد روبه رو باشد:JPG,JPEG,PNG',
            'pic.max' => 'حداکثر حجم آپلود توسط شما 5 مگابایت میباشد.',
        ];
    }
}
