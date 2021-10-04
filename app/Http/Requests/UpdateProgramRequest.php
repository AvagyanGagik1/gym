<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProgramRequest extends FormRequest
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
            'program_category_id'=>'required',
//            'subscription_id'=>'required',
            'trainer_id'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
            'name_blr'=>'required',
            'type'=>'required',
            'duration'=>'required',
            'intensity_ru'=>'required',
            'intensity_en'=>'required',
            'intensity_blr'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required',
            'description_blr'=>'required',
            'image'=>'nullable|image',
        ];
    }
    public function messages()
    {
        return [
            'program_category_id.required'=>'обезательна к заполнению!!',
            'trainer_id.required'=>'обезательна к заполнению!!',
            'name_ru.required'=>'обезательна к заполнению!!',
            'name_en.required'=>'обезательна к заполнению!!',
            'name_blr.required'=>'обезательна к заполнению!!',
            'type.required'=>'обезательна к заполнению!!',
            'duration.required'=>'обезательна к заполнению!!',
            'intensity_ru.required'=>'обезательна к заполнению!!',
            'intensity_en.required'=>'обезательна к заполнению!!',
            'intensity_blr.required'=>'обезательна к заполнению!!',
            'description_en.required'=>'обезательна к заполнению!!',
            'description_ru.required'=>'обезательна к заполнению!!',
            'description_blr.required'=>'обезательна к заполнению!!',
            'image.image'=>'Файл дожен быть картинкой!!',
        ];
    }
}
