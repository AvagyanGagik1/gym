<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProgramCategoryRequest extends FormRequest
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
        ];
    }
    public function messages()
    {
        return [
            'name_ru.required'=>'обезательна к заполнению!!',
            'name_en.required'=>'обезательна к заполнению!!',
            'name_blr.required'=>'обезательна к заполнению!!',
        ];
    }
}
