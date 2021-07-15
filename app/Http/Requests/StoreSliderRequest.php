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
            'image'=>'required|image'
        ];
    }
    public function messages()
    {
        return [
            'images.image'=>'файл должен быть формата кртинкы!!!',
            'images.required' => 'Картинка Обезательна!!'
        ];
    }
}
