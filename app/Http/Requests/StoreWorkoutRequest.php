<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreWorkoutRequest extends FormRequest
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
            'link'=>'required',
            'image'=>'nullable|image',
            'program_id'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
            'name_blr'=>'required',
            'calories'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'link.required'=>'Сылка на выдео обезательна к заполнению!!',
            'image.image'=>'файл дожон быть картинкой',
            'program_id'=>'Тренировка должна пренодлежать к програме',
            'name_ru.required'=>'У тренировки обезательно должна быть имя!!',
            'name_en.required'=>'У тренировки обезательно должна быть имя!!',
            'name_blr.required'=>'У тренировки обезательно должна быть имя!!',
            'calories.required'=>'Калории обезательны к заполнению'
        ];
    }
}
