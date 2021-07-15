<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreDishRequest extends FormRequest
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
            'food_category_id'=>'required',
            'name_en'=>'required',
            'name_ru'=>'required',
            'name_blr'=>'required',
            'description_en'=>'required',
            'description_ru'=>'required',
            'description_blr'=>'required',
            'protein'=>'required|integer',
            'fats'=>'required|integer',
            'carbohydrates'=>'required',
            'image'=>'required|image'
        ];
    }
    public function messages()
    {
        return [
            'food_category_id.required'=>'Категория обезательно должна быть выбранна!!',
            'name_ru.required'=>'Имя обезательна к заполнению!!',
            'name_en.required'=>'Имя обезательна к заполнению!!',
            'name_blr.required'=>'Имя обезательна к заполнению!!',
            'description_ru.required'=>'обезательна к заполнению!!',
            'description_en.required'=>'обезательна к заполнению!!',
            'description_blr.required'=>'обезательна к заполнению!!',
            'protein.required'=>'обезательна к заполнению!!',
            'protein.integer'=>'должно иметь целочисленное значение!!',
            'fats.required'=>'обезательна к заполнению!!',
            'fats.integer'=>'должно иметь целочисленное значение!!',
            'carbohydrates.required'=>'обезательна к заполнению!!',
            'carbohydrates.integer'=>'должно иметь целочисленное значение!!',
            'image.required'=>'обезательна к заполнению!!',
            'image.image'=>'Виберите картинку',
        ];
    }
}
