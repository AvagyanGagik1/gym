<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateTrainerHeaderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'title_en'=>'required',
            'title_ru'=>'required',
            'title_blr'=>'required',
            'description_ru'=>'required',
            'description_en'=>'required',
            'description_blr'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title_ru.required'=>'обезательна к заполнению!!',
            'title_en.required'=>'обезательна к заполнению!!',
            'title_blr.required'=>'обезательна к заполнению!!',
            'description_en.required'=>'обезательна к заполнению!!',
            'description_ru.required'=>'обезательна к заполнению!!',
            'description_blr.required'=>'обезательна к заполнению!!',
        ];
    }
}
