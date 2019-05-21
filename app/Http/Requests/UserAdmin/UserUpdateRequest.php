<?php

namespace App\Http\Requests\UserAdmin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
//        dd(auth()->user());
        return [
            'name' => 'required',
            'password' => 'sometimes|nullable',
            'pic' => 'sometimes|nullable|max:15000',//|image|mimes:jpeg,jpg,png
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(request()->user())
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام و نام خانوادگی خود را وارد کنید',
            'email.required' => 'ایمیل خود را وارد کنید',
            'email.unique' => 'این ایمیل قبلا ثبت شده است.',
            'pic.mimes' => 'پسوند عکس شما میتواند یکی از 3 مورد روبه رو باشد:JPG,JPEG,PNG',
            'pic.max' => 'حداکثر حجم آپلود توسط شما 15 مگابایت میباشد.',
        ];
    }
}
