<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateFoodCategoryRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name_ru'=>'required',
            'name_blr'=>'required',
            'name_en'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name_ru.required'=>'Имя обезательна к заполнению!!',
            'name_en.required'=>'Имя обезательна к заполнению!!',
            'name_blr.required'=>'Имя обезательна к заполнению!!'
        ];
    }
}
