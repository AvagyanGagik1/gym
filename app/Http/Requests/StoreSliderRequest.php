<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class StoreSliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image'=>'required|image',
            'image-small'=>'required|image'
        ];
    }
    public function messages()
    {
        return [
            'image.image'=>'файл должен быть формата кртинкы!!!',
            'image-small.image'=>'файл должен быть формата кртинкы!!!',
            'image.required' => 'Картинка Обезательна!!',
            'image-small.required' => 'Картинка Обезательна!!',
        ];
    }
}
