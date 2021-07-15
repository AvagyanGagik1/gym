<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateClientCommentHeaderRequest extends FormRequest
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
            'title_ru'=>'required',
            'title_en'=>'required',
            'title_blr'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'title_en.required'=>'Заголовок обезателень к заполнению!!',
            'title_ru.required'=>'Заголовок обезателень к заполнению!!',
            'title_blr.required'=>'Заголовок обезателень к заполнению!!'
        ];
    }
}
