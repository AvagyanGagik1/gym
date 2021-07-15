<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateClientCommentRequest extends FormRequest
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
            'user_name_ru'=>'required',
            'user_name_en'=>'required',
            'user_name_blr'=>'required',
            'text_ru'=>'required',
            'text_en'=>'required',
            'text_blr'=>'required',
            'image'=>'nullable|image'
        ];
    }
}
