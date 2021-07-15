<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSliderTextRequest extends FormRequest
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
            'text_ru'=>'required',
            'text_en'=>'required',
            'text_blr'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'text_ru.required'=>'Текст не может быть пустым!!',
            'text_en.required'=>'Текст не может быть пустым!!',
            'text_blr.required'=>'Текст не может быть пустым!!',
        ];
    }
}
