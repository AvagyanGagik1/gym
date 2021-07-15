<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreTrainerRequest extends FormRequest
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
            'name_ru'=>'required',
            'name_en'=>'required',
            'name_blr'=>'required',
            'profession_ru'=>'required',
            'profession_en'=>'required',
            'profession_blr'=>'required',
            'image'=>'required|image'
        ];
    }
    public function messages()
    {
        return [
            'name_ru.required'=>'Имя не может быть пустым!!',
            'name_en.required'=>'Имя не может быть пустым!!',
            'name_blr.required'=>'Имя не может быть пустым!!',
            'profession_ru.required'=>'Профессия обезательна к заполнению!!',
            'profession_en.required'=>'Профессия обезательна к заполнению!!',
            'profession_blr.required'=>'Профессия обезательна к заполнению!!',
            'image.required'=>'Картинка обезательна к заполнению!!'
        ];
    }
}
