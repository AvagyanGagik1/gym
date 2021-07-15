<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateMainNewRequest extends FormRequest
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
            'author'=>'required',
            'quote_ru'=>'required',
            'quote_en'=>'required',
            'quote_blr'=>'required',
            'text_ru'=>'required',
            'text_en'=>'required',
            'text_blr'=>'required',
            'text_title_ru'=>'required',
            'text_title_en'=>'required',
            'text_title_blr'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'author.required'=>'обезательна к заполнению!!',
            'quote_ru.required'=>'обезательна к заполнению!!',
            'quote_en.required'=>'обезательна к заполнению!!',
            'quote_blr.required'=>'обезательна к заполнению!!',
            'text_ru.required'=>'обезательна к заполнению!!',
            'text_en.required'=>'обезательна к заполнению!!',
            'text_blr.required'=>'обезательна к заполнению!!',
            'text_title_ru.required'=>'обезательна к заполнению!!',
            'text_title_en.required'=>'обезательна к заполнению!!',
            'text_title_blr.required'=>'обезательна к заполнению!!',
        ];
    }
}
