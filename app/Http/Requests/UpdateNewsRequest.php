<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateNewsRequest extends FormRequest
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
            'title_en'=>'required',
            'title_ru'=>'required',
            'title_blr'=>'required',
            'description_blr'=>'required',
            'description_en'=>'required',
            'description_ru'=>'required',
            'image'=>'nullable|image'
        ];

    }
    public function messages()
    {
        return [
            'title_ru.required'=>'заголовок не может быть пустым!!',
            'title_en.required'=>'заголовок не может быть пустым!!',
            'title_blr.required'=>'заголовок не может быть пустым!!',
            'description_ru.required'=>'опианые не может быть пустым!!',
            'description_en.required'=>'опианые не может быть пустым!!',
            'description_blr.required'=>'опианые не может быть пустым!!',
            'image.image'=>'Картинка должна быть картинкой!!'
        ];
    }
}
