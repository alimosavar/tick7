<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'pic' => 'image|mimes:jpeg,jpg,png|max:5120',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام محصول خود را وارد کنید.',
            'name.max' => 'نام محصول شما نمیتواند بیشتر از 255 کاراکتر باشد.',
            'description.required' => 'فیلد توضیحات نمیتواند خالی باشد.',
            'description.max' => 'توضیحات محصول شما نمیتواند بیشتر از 255 کاراکتر باشد.',
            'pic.mimes' => 'پسوند عکس شما میتواند یکی از 3 مورد روبه رو باشد:JPG,JPEG,PNG',
            'pic.max' => 'حداکثر حجم آپلود توسط شما 5 مگابایت میباشد.',
            'price.required' => 'قیمت محصول خود را مشخض کنید.',
        ];
    }
}
