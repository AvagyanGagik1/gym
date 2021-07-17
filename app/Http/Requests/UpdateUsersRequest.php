<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUsersRequest extends FormRequest
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
            'email'=>'required|email|',
            'terms'=> 'required',
            'name'=>'required',
            'weight'=>'required',
            'age'=>'required',
            'height'=>'required',
            'target'=>'required',
            'gender'=>'required',
            'avatar'=>'nullable|image'
        ];
    }
}
